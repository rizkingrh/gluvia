<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GluVia - Non-Invasive Blood Sugar Monitoring</title>

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
                    <a href="#home" class="text-slate-600 hover:text-blue-600 font-medium transition">Home</a>
                    <a href="#about" class="text-slate-600 hover:text-blue-600 font-medium transition">About</a>
                    <a href="#features" class="text-slate-600 hover:text-blue-600 font-medium transition">Features</a>
                    <a href="/glucose-history"
                        class="px-5 py-2.5 rounded-full bg-blue-600 text-white font-semibold hover:bg-blue-700 transition shadow-lg shadow-blue-200">Glucose History</a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="text-slate-600 hover:text-blue-600 focus:outline-none">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="relative pt-32 pb-20 lg:pt-42 lg:pb-28 overflow-hidden">
        <div
            class="absolute top-0 right-0 -mr-20 -mt-20 w-96 h-96 bg-blue-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
        </div>
        <div
            class="absolute top-0 left-0 -ml-20 -mt-20 w-96 h-96 bg-sky-200 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000">
        </div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative grid lg:grid-cols-2 gap-12 items-center">
            <div class="text-center lg:text-left">
                <div
                    class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-800 text-sm font-semibold mb-6">
                    <span class="flex h-2 w-2 rounded-full bg-blue-600 mr-2"></span>
                    New Non-Invasive Technology
                </div>
                <h1 class="text-5xl lg:text-7xl font-bold tracking-tight text-slate-900 mb-6 leading-tight">
                    Check Glucose <br>
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-sky-400">Without the
                        Prick.</span>
                </h1>
                <p class="text-lg lg:text-xl text-slate-600 mb-8 max-w-2xl mx-auto lg:mx-0 leading-relaxed">
                    Gluvia uses advanced optical sensor technology to track your blood sugar levels continuously,
                    accurately, and completely pain-free.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center lg:justify-start">
                    <a href="/glucose-history"
                        class="px-8 py-4 rounded-full bg-blue-600 text-white font-bold text-lg hover:bg-blue-700 transition shadow-xl shadow-blue-200 transform hover:-translate-y-1">
                        See Glucose
                    </a>
                    <a href="#how-it-works"
                        class="px-8 py-4 rounded-full bg-white text-slate-700 font-bold text-lg border border-slate-200 hover:bg-slate-50 transition flex items-center justify-center gap-2">
                        <svg class="w-5 h-5 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        See How It Works
                    </a>
                </div>
                <div class="mt-8 flex items-center justify-center lg:justify-start gap-4 text-sm text-slate-500">
                    <div class="flex -space-x-2">
                        <div class="w-8 h-8 rounded-full bg-slate-200 border-2 border-white"></div>
                        <div class="w-8 h-8 rounded-full bg-slate-300 border-2 border-white"></div>
                        <div class="w-8 h-8 rounded-full bg-slate-400 border-2 border-white"></div>
                    </div>
                    <p>Trusted by 10,000+ early adopters</p>
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
                                    98
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
                                    <span>Stable</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card 1 -->
                    <div class="absolute -bottom-6 -left-6 bg-white p-4 rounded-xl shadow-lg border border-slate-50 animate-bounce"
                        style="animation-duration: 3s;">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-green-100 flex items-center justify-center text-green-600">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold uppercase">Accuracy</p>
                                <p class="text-slate-900 font-bold">99.8%</p>
                            </div>
                        </div>
                    </div>

                    <!-- Floating Card 2 -->
                    <div class="absolute -top-6 -right-6 bg-white p-4 rounded-xl shadow-lg border border-slate-50 animate-bounce"
                        style="animation-duration: 4s;">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-red-100 flex items-center justify-center text-red-600">
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                </svg>
                            </div>
                            <div>
                                <p class="text-xs text-slate-500 font-semibold uppercase">Heart Rate</p>
                                <p class="text-slate-900 font-bold">72 BPM</p>
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
    <section id="about" class="py-24 relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div class="order-2 lg:order-1 relative">
                    <div class="relative rounded-3xl overflow-hidden shadow-2xl border-4 border-white/50 bg-white">
                        <!-- Abstract Gradient placeholders -->
                        <div class="h-96 bg-gradient-to-br from-blue-600 to-indigo-700 flex items-center justify-center p-8 relative overflow-hidden">
                            <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                            
                            <!-- Central Icon/Graphic -->
                            <div class="text-center text-white relative z-10">
                                <div class="w-24 h-24 bg-white/20 rounded-full flex items-center justify-center mx-auto mb-6 backdrop-blur-md shadow-inner border border-white/30">
                                    <svg class="w-12 h-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.384-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold mb-2 tracking-tight">Science First</h3>
                            </div>

                            <!-- Decorative background circles -->
                            <div class="absolute top-0 right-0 -mr-12 -mt-12 w-48 h-48 bg-white opacity-10 rounded-full blur-2xl"></div>
                            <div class="absolute bottom-0 left-0 -ml-12 -mb-12 w-40 h-40 bg-indigo-500 opacity-30 rounded-full blur-xl"></div>
                        </div>
                    </div>
                </div>
                
                <div class="order-1 lg:order-2">
                    <div class="inline-flex items-center px-3 py-1 rounded-full bg-blue-100 text-blue-800 text-xs font-bold uppercase tracking-wide mb-4">
                        Our Mission
                    </div>
                    <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-6 leading-tight">Empowering Healthier Lives Through Innovation</h2>
                    <div class="space-y-6 text-lg text-slate-600 leading-relaxed">
                        <p>
                            GluVia is on a mission to make chronic condition management seamless, dignity-preserving, and accessible to all.
                        </p>
                        <p>
                            We understand that traditional glucose monitoring—with its painful inputs and bulky equipment—is a burden. That's why we reinvented the process from the ground up, using advanced photonics and AI to read levels through the skin.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-slate-900 mb-4">Revolutionary Health Monitoring</h2>
                <p class="text-lg text-slate-600">The first ever clinical-grade glucose monitor that doesn't break the
                    skin.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-sky-50 rounded-2xl p-8 transition hover:shadow-lg hover:bg-sky-100/50">
                    <div
                        class="w-14 h-14 rounded-xl bg-blue-600 flex items-center justify-center text-white mb-6 shadow-lg shadow-blue-200">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Zero Pain, Zero Needles</h3>
                    <p class="text-slate-600 leading-relaxed">Forget the finger pricks. Our optical sensor reads glucose
                        levels through your skin using safe light waves.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-sky-50 rounded-2xl p-8 transition hover:shadow-lg hover:bg-sky-100/50">
                    <div
                        class="w-14 h-14 rounded-xl bg-sky-500 flex items-center justify-center text-white mb-6 shadow-lg shadow-sky-200">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Clinical Accuracy</h3>
                    <p class="text-slate-600 leading-relaxed">Calibrated against hospital-grade equipment to ensure you
                        get data you can trust for your health decisions.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-sky-50 rounded-2xl p-8 transition hover:shadow-lg hover:bg-sky-100/50">
                    <div
                        class="w-14 h-14 rounded-xl bg-indigo-500 flex items-center justify-center text-white mb-6 shadow-lg shadow-indigo-200">
                        <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Real-time App Sync</h3>
                    <p class="text-slate-600 leading-relaxed">View your trends, analytics, and alerts instantly on internet. Share reports with your doctor.</p>
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

    <!-- Call to Action -->
    <section class="py-24 relative overflow-hidden">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-5xl font-bold text-slate-900 mb-8">Ready to take control?</h2>
            <p class="text-xl text-slate-600 mb-10 max-w-2xl mx-auto">Join the waitlist today and be the first to
                experience the future of glucose monitoring.</p>

            <form class="flex flex-col sm:flex-row gap-4 justify-center max-w-lg mx-auto">
                <input type="email" placeholder="Enter your email address"
                    class="px-6 py-4 rounded-full border border-slate-300 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent flex-grow text-lg shadow-inner">
                <button type="submit"
                    class="px-8 py-4 rounded-full bg-blue-600 text-white font-bold text-lg hover:bg-blue-700 transition shadow-xl shadow-blue-200 whitespace-nowrap">
                    Join Waitlist
                </button>
            </form>
            <p class="mt-4 text-sm text-slate-400">No spam. Unsubscribe anytime.</p>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-50 border-t border-slate-200 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between items-center gap-6">
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

</html>