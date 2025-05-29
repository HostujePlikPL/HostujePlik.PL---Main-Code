<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Uptime;

class UptimeController extends Controller
{
    // API: Odbierz uptime i zapisz
    public function store(Request $request)
    {
        $validated = $request->validate([
            'uptime_seconds' => 'required|integer|min:0',
        ]);

        Uptime::create([
            'uptime_seconds' => $validated['uptime_seconds'],
            'reported_at' => now(),
        ]);

        return response()->json(['success' => true]);
    }

    // Web: Wyświetl najnowszy uptime
    public function show()
    {
        $latest = Uptime::latest()->first();

        if (!$latest) {
            return view('uptime', ['uptime' => 'Brak danych', 'percent' => 0]);
        }

        $uptimeFormatted = gmdate("H:i:s", $latest->uptime_seconds);
        $percent = round(($latest->uptime_seconds / 86400) * 100, 2); // 86400 sek = 1 doba

        return view('uptime', [
            'uptime' => $uptimeFormatted,
            'percent' => $percent
        ]);
    }
}
