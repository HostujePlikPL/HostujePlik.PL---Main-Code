<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\File;
use App\Models\Uptime;

class HomeController extends Controller
{
    public function index()
    {
        $liczbaUzytkownikow = User::count();
        $liczbaPlikow = File::count();

        // Pobierz najnowszy uptime
        $latest = Uptime::latest()->first();
        $uptimePercent = $latest
            ? round(($latest->uptime_seconds / 86400) * 100, 1)
            : 0;

        return view('home', compact('liczbaUzytkownikow', 'liczbaPlikow', 'uptimePercent'));
    }
}
