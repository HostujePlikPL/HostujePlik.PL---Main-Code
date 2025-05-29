<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class TimeController extends Controller
{
    // Metoda do odbierania danych z ESP32 (POST /api/time)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category' => 'required|string',
            'name' => 'required|string',
            'time_ms' => 'required|integer',
        ]);
    
        $key = 'racing_times';
        $allTimes = Cache::get($key, []);
        $allTimes[] = $validated;
        Cache::put($key, $allTimes, now()->addMinutes(10));
    
        return response()->json(['status' => 'ok']);
    }


    // Metoda do wyświetlania danych (GET /time)
    public function show()
    {
        // Pobierz dane z cache
        $times = Cache::get('racing_times', []);

        // Przekaż do widoku blade 'time'
        return view('time', compact('times'));
    }
}
