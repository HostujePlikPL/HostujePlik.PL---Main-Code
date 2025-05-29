<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Wyniki wyścigu</title>
</head>
<body>
    <h1>Wyniki wyścigu</h1>

    @if(count($times) > 0)
        <table border="1" cellpadding="5">
            <thead>
                <tr>
                    <th>Kategoria</th>
                    <th>Zawodnik</th>
                    <th>Czas (ms)</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($times as $time)
                    <p>
                        Kategoria: {{ $time['category'] ?? 'brak' }},
                        Zawodnik: {{ $time['name'] ?? 'brak' }},
                        Czas: {{ $time['time_ms'] ?? 'brak' }} ms
                    </p>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Brak danych do wyświetlenia.</p>
    @endif
</body>
</html>
