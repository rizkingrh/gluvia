<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GluVia - Non-Invasif</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet" />

    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback if Vite is not immediately serving, though in dev it should be -->
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

        .glass-nav {
            background: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            border-bottom: 1px solid rgba(255, 255, 255, 0.3);
        }
    </style>
</head>

<body class="bg-sky-50 text-slate-800 antialiased overflow-x-hidden">

    <!-- Navigation -->
    <nav class="fixed w-full z-50 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="/" class="flex-shrink-0 flex items-center gap-2">
                    <!-- Logo Icon -->
                    <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                            stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                        </svg>
                    </div>
                    <span class="font-bold text-2xl tracking-tight text-blue-900">GluVia</span>
                </a>
                <div class="hidden md:flex space-x-8 items-center">
                    <a href="#home" class="text-slate-600 hover:text-blue-600 font-medium transition cursor-pointer"
                        onclick="document.getElementById('home').scrollIntoView({ behavior: 'smooth' }); return false;">Home</a>
                    <a href="#about" class="text-slate-600 hover:text-blue-600 font-medium transition cursor-pointer"
                        onclick="document.getElementById('about').scrollIntoView({ behavior: 'smooth' }); return false;">Tentang</a>
                    <a href="#features" class="text-slate-600 hover:text-blue-600 font-medium transition cursor-pointer"
                        onclick="document.getElementById('features').scrollIntoView({ behavior: 'smooth' }); return false;">Fitur</a>
                    <a href="/glucose-history"
                        class="px-5 py-2.5 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow-lg shadow-blue-200">Riwayat
                        Glukosa</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu"
            class="hidden md:hidden bg-white/95 backdrop-blur-md border-t border-slate-100 absolute w-full left-0 top-20 shadow-lg">
            <div class="px-4 py-6 space-y-4">
                <a href="#home" class="block text-slate-600 hover:text-blue-600 font-medium transition"
                    onclick="toggleMobileMenu(); document.getElementById('home').scrollIntoView({ behavior: 'smooth' }); return false;">Home</a>
                <a href="#about" class="block text-slate-600 hover:text-blue-600 font-medium transition"
                    onclick="toggleMobileMenu(); document.getElementById('about').scrollIntoView({ behavior: 'smooth' }); return false;">Tentang</a>
                <a href="#features" class="block text-slate-600 hover:text-blue-600 font-medium transition"
                    onclick="toggleMobileMenu(); document.getElementById('features').scrollIntoView({ behavior: 'smooth' }); return false;">Fitur</a>
                <a href="/glucose-history"
                    class="block px-5 py-3 rounded-xl bg-blue-600 text-white font-semibold hover:bg-blue-700 transition text-center shadow-lg shadow-blue-200">Riwayat
                    Glukosa</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-42 lg:pb-28 overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div
                    class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-800 text-sm font-semibold mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-blue-600 mr-2"></span>
                    Teknologi Non-Invasif
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-slate-900 mb-6 leading-tight">
                    Cek Glukosa <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-sky-400">Tanpa
                        Jarum.</span>
                </h1>
                <p class="text-lg lg:text-xl text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Pantau kadar glukosa kapan saja, tanpa jarum, dan tanpa ribet. GluVia dirancang untuk membantu kamu
                    lebih peduli sama kesehatan, tanpa harus takut sama rasa nyeri.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="/glucose-history"
                        class="px-8 py-4 rounded-full bg-blue-600 text-white font-bold text-lg hover:bg-blue-700 transition shadow-xl shadow-blue-200 transform hover:-translate-y-1">
                        Lihat Riwayat Glukosa
                    </a>
                    <a href="#how-it-works"
                        class="px-8 py-4 rounded-full bg-white text-slate-700 font-bold text-lg border border-slate-200 hover:bg-slate-50 transition flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Lihat Cara Kerja
                    </a>
                </div>
            </div>

            <!-- Hero Visual -->
            <div class="relative mx-auto lg:ml-auto w-full max-w-md lg:max-w-full">
                <div class="relative z-10 bg-white rounded-3xl shadow-2xl overflow-hidden border border-slate-100 p-6">
                    <!-- Device Abstract Representation since image gen failed -->
                    <div
                        class="aspect-square rounded-2xl bg-gradient-to-br from-slate-50 to-blue-50 flex items-center justify-center relative overflow-hidden">
                        <div
                            class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                        </div>

                        <!-- Watch/Device Shape -->
                        <div
                            class="w-64 h-64 rounded-[3rem] bg-gradient-to-tr from-gray-900 to-gray-800 shadow-2xl flex items-center justify-center relative p-2 border-4 border-gray-700 ring-4 ring-gray-900/10">
                            <!-- Screen -->
                            <div
                                class="w-full h-full rounded-[2.5rem] bg-black overflow-hidden relative flex flex-col items-center justify-center">
                                <!-- Reflection -->
                                <div
                                    class="absolute top-0 right-0 w-32 h-32 bg-white opacity-5 blur-2xl rounded-full transform translate-x-10 -translate-y-10">
                                </div>

                                <!-- Glucose Value -->
                                <div class="text-6xl font-sans font-bold text-white mb-1">
                                    120
                                </div>
                                <div class="text-sm font-medium text-blue-400 uppercase tracking-widest mb-4">mg/dL
                                </div>

                                <!-- Graph -->
                                <div class="w-40 h-16 flex items-end gap-1">
                                    <div class="w-1.5 h-4 bg-gray-800 rounded-full"></div>
                                    <div class="w-1.5 h-6 bg-gray-800 rounded-full"></div>
                                    <div class="w-1.5 h-5 bg-gray-800 rounded-full"></div>
                                    <div class="w-1.5 h-8 bg-gray-700 rounded-full"></div>
                                    <div class="w-1.5 h-10 bg-blue-900 rounded-full"></div>
                                    <div class="w-1.5 h-12 bg-blue-700 rounded-full"></div>
                                    <div class="w-1.5 h-10 bg-blue-500 rounded-full animate-pulse"></div>
                                </div>
                                <div class="mt-4 flex items-center gap-2 text-xs text-green-400">
                                    <svg class="w-3 h-3" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                                    </svg>
                                    <span>Normal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Background Decorative Blobs -->
                <div
                    class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-[120%] h-[120%] bg-gradient-to-r from-blue-200/20 to-sky-200/20 rounded-full filter blur-3xl -z-10">
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="py-24 relative overflow-hidden bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white/50 bg-white">
                        <!-- Abstract Gradient placeholders -->
                        <div
                            class="h-96 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center p-8 relative overflow-hidden">
                            <div
                                class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10">
                            </div>

                            <!-- Central Icon/Graphic -->
                            <div class="text-center text-white relative z-10">
                                <div
                                    class="w-32 h-32 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-md shadow-inner border border-white/30">
                                    <svg class="w-24 h-24 text-white" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Decorative background circles -->
                            <div
                                class="absolute top-0 right-0 -mr-12 -mt-12 w-48 h-48 bg-white opacity-10 rounded-full blur-2xl">
                            </div>
                            <div
                                class="absolute bottom-0 left-0 -ml-12 -mb-12 w-40 h-40 bg-indigo-500 opacity-30 rounded-full blur-xl">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="order-1 lg:order-2">
                    <div
                        class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-bold uppercase tracking-wide mb-4">
                        Misi Kami
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">Membantu Monitoring
                        Glukosa dengan Lebih Mudah</h2>
                    <div class="space-y-6 text-lg text-slate-600 leading-relaxed">
                        <p>
                            GluVia memiliki misi untuk membuat manajemen kondisi glukosa menjadi lebih mudah, nyaman, dan dapat diakses oleh semua orang.
                        </p>
                        <p>
                            Kami memahami bahwa pemantauan glukosa tradisional, dengan pengambilan sampel yang menyakitkan dan peralatan yang besar adalah sebuah beban. Itulah sebabnya kami menciptakan kembali proses tersebut dari awal, menggunakan teknologi tanpa jarum dan nyeri, untuk membaca kadar gula darah melalui kulit.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Pemantauan Kesehatan Revolusioner</h2>
                <p class="text-lg text-slate-600">Monitor glukosa tanpa melukai kulit.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-white rounded-2xl p-8 transition hover:shadow-lg hover:bg-sky-100/50 border border-slate-50">
                    <div
                        class="w-14 h-14 rounded-xl bg-blue-600 flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-200">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Tanpa Rasa Sakit, Tanpa Jarum</h3>
                    <p class="text-slate-600 leading-relaxed">Lupakan tusukan jari. Sensor optik kami membaca kadar
                        glukosa melalui kulit menggunakan gelombang cahaya yang aman.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-white rounded-2xl p-8 transition hover:shadow-lg hover:bg-sky-100/50 border border-slate-50">
                    <div
                        class="w-14 h-14 rounded-xl bg-sky-500 flex items-center justify-center text-white mb-6 shadow-lg shadow-sky-200">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Akurasi Klinis</h3>
                    <p class="text-slate-600 leading-relaxed">Dikalibrasi dengan peralatan standar rumah sakit untuk
                        memastikan Anda mendapatkan data yang dapat dipercaya untuk keputusan kesehatan Anda.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-white rounded-2xl p-8 transition hover:shadow-lg hover:bg-sky-100/50 border border-slate-50">
                    <div
                        class="w-14 h-14 rounded-xl bg-indigo-500 flex items-center justify-center text-white mb-6 shadow-lg shadow-indigo-200">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Sinkronisasi Aplikasi Real-time</h3>
                    <p class="text-slate-600 leading-relaxed">Lihat tren, analitik, dan peringatan Anda secara instan.
                        Simpan laporan dengan Anda dengan mudah.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats/Banner Section -->
    <section class="py-20 bg-blue-900 text-white relative overflow-hidden">
        <div
            class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/carbon-fibre.png')] opacity-10">
        </div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid md:grid-cols-2 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-blue-800">
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">24/7</div>
                    <div class="text-blue-200 text-sm uppercase tracking-wider">Monitoring</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">99.9%</div>
                    <div class="text-blue-200 text-sm uppercase tracking-wider">Uptime</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-50 border-t border-slate-200 py-12">
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="flex items-center gap-2">
                <div class="w-8 h-8 rounded-full bg-blue-600 flex items-center justify-center text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                        stroke="currentColor" class="w-4 h-4">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z" />
                    </svg>
                </div>
                <span class="font-bold text-xl text-slate-900">GluVia</span>
            </div>
            <p class="text-slate-400 text-sm">© {{ date('Y') }} GluVia Inc. All rights reserved.</p>
        </div>
    </footer>
</body>

<script>
    const btn = document.getElementById('mobile-menu-btn');
    const menu = document.getElementById('mobile-menu');

    function toggleMobileMenu() {
        menu.classList.toggle('hidden');
    }

    btn.addEventListener('click', () => {
        toggleMobileMenu();
    });
</script>

</html>
