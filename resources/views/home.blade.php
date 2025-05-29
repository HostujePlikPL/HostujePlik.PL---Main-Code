<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HostujePlik.PL - Najszybszy hosting plików w Polsce</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
        }
    </style>
</head>
<body class="bg-white">
    <!-- Navigation -->
    <nav class="bg-white shadow-sm py-4">
        <div class="container mx-auto px-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-600">
                Hostuje<span class="text-black">Plik</span>.PL
            </h1>
            <div class="hidden md:flex space-x-8">
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">Funkcje</a>
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">Cennik</a>
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">FAQ</a>
                <a href="#" class="text-gray-700 hover:text-red-600 font-medium">Kontakt</a>
            </div>
            <button class="bg-red-600 hover:bg-red-700 text-white px-6 py-2 rounded-md font-medium transition-colors">
                Prześlij plik
            </button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="py-20 bg-gradient-to-b from-white to-gray-50">
        <div class="container mx-auto px-4 text-center">
            <div>
                <h1 class="text-5xl md:text-6xl font-bold mb-6 text-gray-900 leading-tight">
                    <span class="text-red-600">Udostępniaj pliki</span> bez ograniczeń
                </h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-10">
                    Najszybszy hosting plików w Polsce z bezpieczeństwem na poziomie enterprise
                </p>
                <div class="flex flex-col sm:flex-row justify-center gap-4">
                    <button class="bg-red-600 hover:bg-red-700 text-white px-8 py-4 rounded-lg text-lg font-medium shadow-lg transition-all transform hover:scale-105">
                        Rozpocznij przesyłanie - Za darmo
                    </button>
                    <button class="border-2 border-gray-300 hover:border-red-600 text-gray-700 px-8 py-4 rounded-lg text-lg font-medium transition-colors">
                        Jak to działa →
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Nasze funkcje</h2>
                <div class="w-24 h-1 bg-red-600 mx-auto"></div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="h-full border border-gray-200 hover:border-red-600 transition-colors shadow-sm hover:shadow-md rounded-lg">
                    <div class="p-6 flex flex-col items-center">
                        <div class="p-3 bg-red-50 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-600">
                                <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"></path>
                                <polyline points="17 8 12 3 7 8"></polyline>
                                <line x1="12" y1="3" x2="12" y2="15"></line>
                            </svg>
                        </div>
                        <h3 class="text-xl text-gray-900 font-bold mb-2">Błyskawiczne przesyłanie</h3>
                        <p class="text-center text-gray-600">Przesyłaj pliki w kilka sekund dzięki naszym szybkim serwerom</p>
                    </div>
                </div>

                <div class="h-full border border-gray-200 hover:border-red-600 transition-colors shadow-sm hover:shadow-md rounded-lg">
                    <div class="p-6 flex flex-col items-center">
                        <div class="p-3 bg-red-50 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-600">
                                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl text-gray-900 font-bold mb-2">Bezpieczeństwo</h3>
                        <p class="text-center text-gray-600">256-bitowe szyfrowanie AES dla wszystkich plików</p>
                    </div>
                </div>

                <div class="h-full border border-gray-200 hover:border-red-600 transition-colors shadow-sm hover:shadow-md rounded-lg">
                    <div class="p-6 flex flex-col items-center">
                        <div class="p-3 bg-red-50 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-600">
                                <circle cx="12" cy="12" r="10"></circle>
                                <polyline points="12 6 12 12 16 14"></polyline>
                            </svg>
                        </div>
                        <h3 class="text-xl text-gray-900 font-bold mb-2">Długi czas przechowywania</h3>
                        <p class="text-center text-gray-600">Pliki dostępne przez minimum 30 dni</p>
                    </div>
                </div>

                <div class="h-full border border-gray-200 hover:border-red-600 transition-colors shadow-sm hover:shadow-md rounded-lg">
                    <div class="p-6 flex flex-col items-center">
                        <div class="p-3 bg-red-50 rounded-full mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-red-600">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <h3 class="text-xl text-gray-900 font-bold mb-2">Łatwe udostępnianie</h3>
                        <p class="text-center text-gray-600">Generuj linki jednym kliknięciem</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="text-5xl font-bold text-red-600 mb-2">{{ number_format($liczbaPlikow, 0, ',', ' ') }}</div>
                    <div class="text-gray-600 uppercase text-sm tracking-wider">Przesłanych plików</div>
                </div>
                <div>
                    <div class="text-5xl font-bold text-red-600 mb-2">
                        {{ $uptimePercent > 0 ? number_format($uptimePercent, 1, ',', '') . '%' : 'Brak danych' }}
                    </div>
                    <div class="text-gray-600 uppercase text-sm tracking-wider">Dostępności</div>
                </div>
                <div>
                    <div class="text-5xl font-bold text-red-600 mb-2">{{ number_format($liczbaUzytkownikow, 0, ',', ' ') }}</div>
                    <div class="text-gray-600 uppercase text-sm tracking-wider">Zadowolonych użytkowników</div>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works Section -->
    <section class="py-16 bg-white">
        <div class="container mx-auto px-4">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Jak to działa?</h2>
                <div class="w-24 h-1 bg-red-600 mx-auto"></div>
            </div>

            <div class="max-w-4xl mx-auto">
                <div class="flex flex-col md:flex-row gap-8 mb-12">
                    <div class="flex-1 bg-gray-800 p-6 rounded-lg h-full">
                        <div class="text-red-500 text-2xl font-bold mb-4">1</div>
                        <h3 class="text-xl font-bold mb-3 text-white">Prześlij swój plik</h3>
                        <p class="text-gray-300">
                            Po prostu przeciągnij i upuść plik lub kliknij, aby przeglądać. Obsługujemy wszystkie typy plików do 100MB.
                        </p>
                    </div>
                    <div class="flex-1 bg-gray-800 p-6 rounded-lg h-full">
                        <div class="text-red-500 text-2xl font-bold mb-4">2</div>
                        <h3 class="text-xl font-bold mb-3 text-white">Otrzymaj link</h3>
                        <p class="text-gray-300">
                            Wygenerujemy unikalny link do pobrania, który możesz udostępnić każdemu.
                        </p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-8">
                    <div class="flex-1 bg-gray-800 p-6 rounded-lg h-full">
                        <div class="text-red-500 text-2xl font-bold mb-4">3</div>
                        <h3 class="text-xl font-bold mb-3 text-white">Udostępnij i pobierz</h3>
                        <p class="text-gray-300">
                            Odbiorcy mogą pobrać plik w dowolnym momencie w okresie przechowywania.
                        </p>
                    </div>
                    <div class="flex-1 bg-gray-800 p-6 rounded-lg h-full">
                        <div class="text-red-500 text-2xl font-bold mb-4">4</div>
                        <h3 class="text-xl font-bold mb-3 text-white">Automatyczne czyszczenie</h3>
                        <p class="text-gray-300">
                            Pliki są automatycznie usuwane po 30 dniach braku aktywności.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-white">
        <div class="container mx-auto px-4 text-center">
            <div class="max-w-3xl mx-auto bg-white p-8 rounded-xl shadow-lg border border-gray-100">
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Gotowy do szybkiego udostępniania plików?</h2>
                <p class="text-xl text-gray-600 mb-8">
                    Dołącz do naszej społeczności użytkowników, którzy ufają HostujePlik.PL w codziennym przesyłaniu plików
                </p>
                <button class="bg-red-600 hover:bg-red-700 text-white px-10 py-4 rounded-lg text-lg font-medium shadow-lg transition-all transform hover:scale-105">
                    Rozpocznij za darmo
                </button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-2xl font-bold text-red-400 mb-4">HostujePlik.PL</h3>
                    <p class="text-gray-400">Najszybsze rozwiązanie do udostępniania plików w Polsce</p>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Firma</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">O nas</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Kariera</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Prasa</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Zasoby</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Blog</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Pomoc</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">API</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-lg font-semibold mb-4">Prawne</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Polityka prywatności</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Regulamin</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition-colors">Polityka cookies</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-400">
                © <script>document.write(new Date().getFullYear())</script> HostujePlik.PL. Wszelkie prawa zastrzeżone.
            </div>
        </div>
    </footer>
</body>
</html>