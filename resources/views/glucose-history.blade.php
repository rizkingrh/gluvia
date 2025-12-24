<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/x-icon" href="{{ asset('img/gluvia-icon-tp.png') }}">
    <title>GluVia - History Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            sky: {
                                50: '#f0f9ff',
                                100: '#e0f2fe',
                                500: '#0ea5e9',
                                600: '#0284c7',
                            }
                        },
                        fontFamily: {
                            sans: ['Instrument Sans', 'sans-serif'],
                        }
                    }
                }
            }
        </script>
    @endif

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        .glass-panel {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.5);
        }

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
    @livewireStyles
</head>

<body class="bg-sky-50 text-slate-800 antialiased min-h-screen flex flex-col">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="/" class="flex-shrink-0 flex items-center gap-2">
                    <!-- Logo Icon -->
                    <div class="w-8 h-8 rounded-full flex items-center justify-center">
                        <img src="{{ asset('img/gluvia-icon-tp.png') }}" alt="Icon GluVia">
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-blue-900">GluVia</span>
                </a>
                <div class="flex space-x-8 items-center">
                    <a href="/"
                        class="px-5 py-2.5 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow-lg shadow-blue-200">&larr;
                        Back to Home</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow pt-32 pb-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto space-y-8">
            @livewire('glucose-history')
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-slate-50 border-t border-slate-200 py-12">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full flex items-center justify-center">
                    <img src="{{ asset('img/gluvia-icon-tp.png') }}" alt="Icon GluVia">
                </div>
                <span class="font-bold text-xl text-slate-900">GluVia</span>
            </div>
            <p class="text-slate-400 text-sm">© {{ date('Y') }} GluVia Inc. All rights reserved.</p>
        </div>
    </footer>

    @livewireScripts
</body>

</html>
