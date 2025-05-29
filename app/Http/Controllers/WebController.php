<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as LaravelAuth;
use App\Http\Resources\BundleResource;
use App\Models\Bundle;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Exception;

class WebController extends Controller
{
    public function homepage()
    {
        $bundles = [];

        if (LaravelAuth::check()) {
            $user = LaravelAuth::user();
            $userBundles = $user->bundles;

            if (!empty($userBundles) && $userBundles->count() > 0) {
                $bundles = BundleResource::collection($userBundles);
            }
        }

        return view('homepage', [
            'bundles' => $bundles
        ]);
    }

    public function login()
    {
        return view('login');
    }

    public function doLogin(Request $request)
    {
        abort_if(!$request->ajax(), 403);

        $request->validate([
            'login'    => 'required|alpha_num|min:4|max:40',
            'password' => 'required|min:5|max:100'
        ]);

        $credentials = [
            'username' => $request->input('login'),
            'password' => $request->input('password'),
        ];

        try {
            if (LaravelAuth::attempt($credentials)) {
                $request->session()->regenerate();

                return response()->json([
                    'result' => true,
                ]);
            } else {
                Log::warning('Nieudana próba logowania', ['username' => $credentials['username']]);
                return response()->json([
                    'result'  => false,
                    'message' => 'Niepoprawne dane logowania.'
                ], 401);
            }
        } catch (Exception $e) {
            Log::error('Błąd podczas logowania: ' . $e->getMessage());
            return response()->json([
                'result'  => false,
                'message' => 'Authentication failed, please try again.'
            ], 403);
        }

        return response()->json([
            'result'  => false,
            'message' => 'Unexpected error'
        ], 500);
    }

    public function newBundle(Request $request)
    {
        abort_if(!$request->ajax(), 403);

        $user = LaravelAuth::user();

        try {
            $bundle = new Bundle([
                'user_username' => $user->username ?? null,
                'created_at'    => now(),
                'completed'     => false,
                'expiry'        => config('sharing.default-expiry', 86400),
                'expires_at'    => null,
                'password'      => null,
                'slug'          => substr(sha1(uniqid('slug_', true)), 0, rand(35, 40)),
                'owner_token'   => substr(sha1(uniqid('preview_', true)), 0, 15),
                'preview_token' => substr(sha1(uniqid('preview_', true)), 0, 15),
                'fullsize'      => 0,
                'title'         => null,
                'description'   => null,
                'max_downloads' => 0,
                'downloads'     => 0
            ]);

            $bundle->save();

            return response()->json([
                'result'  => true,
                'redirect'=> route('upload.create.show', ['bundle' => $bundle->slug]),
                'bundle'  => new BundleResource($bundle)
            ]);
        } catch (Exception $e) {
            Log::error('Błąd tworzenia pakietu: ' . $e->getMessage());
            return response()->json([
                'result'  => false,
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function logout(Request $request)
    {
        LaravelAuth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('homepage');
    }
}
