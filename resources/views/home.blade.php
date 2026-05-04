<!DOCTYPE html>
<html lang="en" data-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chirper - Space Edition 🚀</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/daisyui@5/themes.css" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen flex flex-col font-sans bg-gradient-to-br from-[#0b0f2a] via-[#1a1f4a] to-black text-white">

    <!-- Navbar -->
    <nav class="navbar bg-black/60 backdrop-blur sticky top-0 z-50 border-b border-purple-500/20">
        <div class="navbar-start">
            <a href="/" class="btn btn-ghost text-xl font-bold text-purple-300">
                🚀 Chirper
            </a>
        </div>
        <div class="navbar-end gap-2">
            <a href="#" class="btn btn-ghost btn-sm text-purple-200 hover:text-white">Sign In</a>
            <a href="#" class="btn bg-purple-600 hover:bg-purple-700 text-white btn-sm border-none shadow-lg">
                Launch 🚀
            </a>
        </div>
    </nav>

    <!-- Hero -->
    <main class="flex-1 container mx-auto px-4 py-12">
        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- Text -->
            <div>
                <h1 class="text-5xl font-bold leading-tight">
                    Explore the <br>
                    <span class="text-purple-400">Universe of Ideas 🌌</span>
                </h1>

                <p class="mt-6 text-lg text-gray-300">
                    Jelajahi dunia tanpa batas. Bagikan pikiranmu seperti bintang di galaksi.
                    Setiap ide adalah cahaya di kegelapan.
                </p>
            </div>

            <!-- Dynamic Chirps -->
            <div class="card bg-black/50 backdrop-blur-xl shadow-xl border border-purple-500/30">
                <div class="card-body">
                    <h2 class="card-title text-purple-400">🌌 Cosmic Feed</h2>

                    <div class="space-y-4 mt-4">

                        @forelse ($chirps as $chirp)
                            <div class="p-4 rounded-xl bg-purple-900/30 border border-purple-500/20">
                                <p class="font-semibold text-purple-300">
                                    {{ $chirp['author'] }}
                                </p>

                                <p class="text-sm text-gray-300">
                                    {{ $chirp['message'] }}
                                </p>

                                <p class="text-xs text-gray-500 mt-1">
                                    {{ $chirp['time'] }}
                                </p>
                            </div>
                        @empty
                            <p class="text-gray-400">Belum ada chirps 🚀</p>
                        @endforelse

                    </div>
                </div>
            </div>

        </div>

        <!-- Features -->
        <div class="mt-20 grid md:grid-cols-3 gap-6">

            <div class="card bg-black/50 backdrop-blur border border-purple-500/20">
                <div class="card-body items-center text-center">
                    <div class="text-4xl">🚀</div>
                    <h2 class="card-title text-purple-300">Fast Launch</h2>
                    <p class="text-sm text-gray-400">
                        Performa cepat seperti roket menembus angkasa.
                    </p>
                </div>
            </div>

            <div class="card bg-black/50 backdrop-blur border border-blue-500/20">
                <div class="card-body items-center text-center">
                    <div class="text-4xl">🌌</div>
                    <h2 class="card-title text-blue-300">Infinite Space</h2>
                    <p class="text-sm text-gray-400">
                        Ide tanpa batas di galaksi digital.
                    </p>
                </div>
            </div>

            <div class="card bg-black/50 backdrop-blur border border-indigo-500/20">
                <div class="card-body items-center text-center">
                    <div class="text-4xl">✨</div>
                    <h2 class="card-title text-indigo-300">Bright Ideas</h2>
                    <p class="text-sm text-gray-400">
                        Setiap ide bersinar seperti bintang.
                    </p>
                </div>
            </div>

        </div>
    </main>

    <!-- Footer -->
    <footer class="footer footer-center p-6 bg-black/60 backdrop-blur text-gray-400 text-sm mt-10 border-t border-purple-500/20">
        <div>
            <p>🚀 Chirper Space 2026</p>
            <p class="text-gray-500">
                Built by Muhammad Rafli Daffa Aulia (240170160)
            </p>
        </div>
    </footer>

</body>
</html>