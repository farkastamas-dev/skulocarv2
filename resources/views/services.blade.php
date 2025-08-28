<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szolgáltatások - SkuloCar</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        /* Dark theme variables */
        :root {
            --bg-primary: #000000;
            --bg-secondary: #0a0a0a;
            --bg-card: #1a1a1a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --border-color: #333333;
            --accent-color: #fbbf24;
            --accent-hover: #f59e0b;
        }

        /* Dark theme classes */
        .bg-dark-bg {
            background-color: #000000 !important;
        }

        .bg-dark-secondary {
            background-color: #0a0a0a !important;
        }

        .bg-dark-card {
            background-color: #1a1a1a !important;
        }

        .text-dark-text {
            color: #ffffff !important;
        }

        .text-dark-text-secondary {
            color: #b3b3b3 !important;
        }

        .border-dark-border {
            border-color: #333333 !important;
        }

        /* Animációs osztályok */
        .menu-transition {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-transition-fast {
            transition: all 0.15s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-slide-in {
            animation: slideInFromRight 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .menu-item-fade-in {
            animation: fadeIn 0.3s ease-out;
        }

        .dropdown-scale-in {
            animation: scaleIn 0.2s ease-out;
        }

        .submenu-slide-in {
            animation: slideInFromTop 0.3s ease-out;
        }

        .menu-item-slide-in {
            animation: slideInFromLeft 0.3s ease-out;
        }

        /* Keyframe animációk */
        @keyframes slideInFromRight {
            from {
                transform: translateX(100%);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-20px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-10px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes scaleIn {
            from {
                transform: scale(0.95);
                opacity: 0;
            }

            to {
                transform: scale(1);
                opacity: 1;
            }
        }

        @keyframes ripple {
            0% {
                transform: scale(0);
                opacity: 1;
            }

            100% {
                transform: scale(4);
                opacity: 0;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        /* Desktop dropdown styles */
        .desktop-dropdown {
            position: relative;
        }

        .desktop-dropdown-content {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #1a1a1a;
            border: 1px solid #333333;
            border-radius: 8px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5);
            z-index: 1000;
            min-width: 200px;
            animation: scaleIn 0.2s ease-out;
        }

        .desktop-dropdown:hover .desktop-dropdown-content {
            display: block;
        }

        .desktop-dropdown-content a {
            display: block;
            padding: 12px 16px;
            color: #ffffff;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .desktop-dropdown-content a:hover {
            background-color: #333333;
            color: #fbbf24;
        }

        /* Mobile menu styles */
        #mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 320px;
            height: 100vh;
            z-index: 1000;
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        #mobile-menu.show {
            transform: translateX(0);
        }

        .mobile-menu-backdrop {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(4px);
            z-index: 999;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .mobile-menu-backdrop.show {
            opacity: 1;
        }

        .mobile-menu-container {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, #0a0a0a, #1a1a1a, #000000);
            box-shadow: -4px 0 20px rgba(0, 0, 0, 0.5);
        }

        .mobile-menu-item {
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.3s ease;
        }

        .mobile-menu-item.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .mobile-menu-item.closing {
            opacity: 0;
            transform: translateX(20px);
        }

        .mobile-submenu {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }

        .mobile-submenu.show {
            max-height: 200px;
        }

        .fa-chevron-down {
            transition: transform 0.3s ease;
        }

        .fa-chevron-down.rotate {
            transform: rotate(180deg);
        }

        /* Ripple effect */
        .ripple {
            position: relative;
            overflow: hidden;
        }

        .ripple::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 5px;
            height: 5px;
            background: rgba(255, 255, 255, 0.3);
            opacity: 0;
            border-radius: 100%;
            transform: scale(1, 1) translate(-50%);
            transform-origin: 50% 50%;
        }

        .ripple:active::after {
            animation: ripple 0.6s ease-out;
        }

        /* Pulse animation */
        .pulse-animation {
            animation: pulse 2s infinite;
        }

        /* Reduced motion support */
        @media (prefers-reduced-motion: reduce) {

            .menu-transition,
            .menu-transition-fast,
            .fa-chevron-down,
            .mobile-menu-item {
                transition: none;
                animation: none;
            }
        }

        /* High contrast support */
        @media (prefers-contrast: high) {
            .mobile-menu-backdrop {
                background: rgba(0, 0, 0, 0.9);
            }
        }

        /* Touch optimization */
        @media (hover: none) and (pointer: coarse) {
            .mobile-menu-item:hover {
                transform: none;
            }

            .mobile-menu-item:active {
                background: rgba(255, 255, 255, 0.15);
                transform: scale(0.98);
            }
        }

        /* Body scroll lock */
        body.menu-open {
            overflow: hidden;
        }
    </style>
</head>

<body class="bg-dark-bg text-dark-text">
    <!-- Header -->
    <header class="bg-dark-bg border-dark-border fixed left-0 right-0 top-0 z-40 border-b">
        <div class="container mx-auto flex h-16 items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-yellow-400 transition-all duration-300 hover:text-yellow-300">
                    SkuloCar
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex md:items-center md:space-x-6">
                <!-- Főoldal -->
                <a href="/" class="text-dark-text px-4 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Főoldal</span>
                </a>

                <!-- Autók -->
                <div class="desktop-dropdown">
                    <button class="text-dark-text px-4 py-2 transition-all duration-300 hover:text-yellow-400">
                        <span class="font-medium">Autók</span>
                        <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="desktop-dropdown-content">
                        <a href="#">Új autók</a>
                        <a href="#">Használt autók</a>
                        <a href="#">Autó keresés</a>
                        <a href="#">Árlista</a>
                    </div>
                </div>

                <!-- Szolgáltatások -->
                <div class="desktop-dropdown">
                    <button class="text-dark-text px-4 py-2 transition-all duration-300 hover:text-yellow-400">
                        <span class="font-medium">Szolgáltatások</span>
                        <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="desktop-dropdown-content">
                        <a href="/services">Összes szolgáltatás</a>
                        <a href="#">Gépjármű szerviz</a>
                        <a href="#">Alufelni és gumiszerviz</a>
                        <a href="#">Autókozmetika</a>
                        <a href="#">Diagnosztika</a>
                    </div>
                </div>

                <!-- Alkatrészek -->
                <div class="desktop-dropdown">
                    <button class="text-dark-text px-4 py-2 transition-all duration-300 hover:text-yellow-400">
                        <span class="font-medium">Alkatrészek</span>
                        <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="desktop-dropdown-content">
                        <a href="#">Motor alkatrészek</a>
                        <a href="#">Fékrendszer</a>
                        <a href="#">Felfüggesztés</a>
                        <a href="#">Villamossági</a>
                        <a href="#">Karosszéria</a>
                    </div>
                </div>

                <!-- Rólunk -->
                <a href="#" class="text-dark-text px-4 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Rólunk</span>
                </a>

                <!-- Kapcsolat -->
                <a href="#contact" class="rounded-lg bg-yellow-500 px-6 py-2 font-medium text-black transition-all duration-300 hover:bg-yellow-400">
                    Kapcsolat
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="bg-dark-border ripple flex h-10 w-10 items-center justify-center rounded-lg text-white transition-all duration-300 hover:bg-yellow-500 hover:text-black md:hidden">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="menu-transition">
        <div id="mobile-menu-backdrop" class="mobile-menu-backdrop"></div>
        <div class="mobile-menu-container">
            <!-- Menu Header -->
            <div class="border-dark-border flex h-16 items-center justify-between border-b px-6">
                <div class="text-xl font-bold text-yellow-400">SkuloCar</div>
                <button id="mobile-menu-close" class="bg-dark-border ripple flex h-8 w-8 items-center justify-center rounded-lg text-white transition-all duration-300 hover:bg-yellow-500 hover:text-black">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <!-- Menu Content -->
            <div class="flex h-full flex-col">
                <nav class="flex-1 px-6 py-4">
                    <ul class="space-y-2">
                        <!-- Főoldal -->
                        <li class="mobile-menu-item">
                            <a href="/" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium">Főoldal</span>
                            </a>
                        </li>

                        <!-- Autók -->
                        <li class="mobile-menu-item">
                            <button class="mobile-dropdown-btn ripple flex w-full items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium">Autók</span>
                                <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                            </button>
                            <ul class="mobile-submenu mt-2 space-y-1">
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Új autók</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Használt autók</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Autó keresés</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Árlista</a></li>
                            </ul>
                        </li>

                        <!-- Szolgáltatások -->
                        <li class="mobile-menu-item">
                            <button class="mobile-dropdown-btn ripple flex w-full items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium">Szolgáltatások</span>
                                <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                            </button>
                            <ul class="mobile-submenu mt-2 space-y-1">
                                <li><a href="/services" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Összes szolgáltatás</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Gépjármű szerviz</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Alufelni és gumiszerviz</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Autókozmetika</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Diagnosztika</a></li>
                            </ul>
                        </li>

                        <!-- Alkatrészek -->
                        <li class="mobile-menu-item">
                            <button class="mobile-dropdown-btn ripple flex w-full items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium">Alkatrészek</span>
                                <i class="fa-solid fa-chevron-down text-xs transition-transform duration-300"></i>
                            </button>
                            <ul class="mobile-submenu mt-2 space-y-1">
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Motor alkatrészek</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Fékrendszer</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Felfüggesztés</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Villamossági</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400">Karosszéria</a></li>
                            </ul>
                        </li>

                        <!-- Rólunk -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium">Rólunk</span>
                            </a>
                        </li>

                        <!-- Kapcsolat -->
                        <li class="mobile-menu-item">
                            <a href="#contact" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium">Kapcsolat</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Menu Footer -->
                <div class="border-dark-border border-t px-6 py-4">
                    <div class="text-center text-sm text-gray-400">
                        <p>© 2024 SkuloCar Kft.</p>
                        <p class="mt-1">Minden jog fenntartva</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <main class="pt-16">
        <!-- Hero Section -->
        <section class="bg-dark-secondary py-16">
            <div class="container mx-auto px-4">
                <h1 class="mb-4 text-4xl font-bold">Szolgáltatásaink</h1>
                <nav class="flex items-center space-x-2 text-sm">
                    <a href="/" class="text-yellow-400 hover:text-yellow-300">Főoldal</a>
                    <span class="text-gray-400">/</span>
                    <span class="text-gray-300">Szolgáltatások</span>
                </nav>
            </div>
        </section>

        <!-- Services Content -->
        <section class="bg-dark-bg py-16">
            <div class="container mx-auto px-4">
                <div class="mx-auto max-w-4xl">
                    <h2 class="mb-12 text-center text-3xl font-bold">Teljes körű autószolgáltatás</h2>

                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2">
                        <div class="bg-dark-card rounded-lg p-8 transition-all duration-300 hover:scale-105">
                            <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-lg bg-yellow-500">
                                <i class="fa-solid fa-cogs text-3xl text-black"></i>
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">Autóalkatrész és felszerelés</h3>
                            <p class="mb-6 text-gray-300">
                                Széles választék autóalkatrészekből és felszerelésekből minden márkához és típushoz.
                            </p>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Minden autómárka alkatrészei
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Gyári és utángyártott termékek
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Garantált minőség
                                </li>
                            </ul>
                        </div>

                        <div class="bg-dark-card rounded-lg p-8 transition-all duration-300 hover:scale-105">
                            <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-lg bg-yellow-500">
                                <i class="fa-solid fa-wrench text-3xl text-black"></i>
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">Gépjármű szerviz</h3>
                            <p class="mb-6 text-gray-300">
                                Professzionális szerviz szolgáltatás kiváló minőségben és gyors kiszolgálással.
                            </p>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Diagnosztika és javítás
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Olajcsere és szűrőcsere
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Fékrendszer szerviz
                                </li>
                            </ul>
                        </div>

                        <div class="bg-dark-card rounded-lg p-8 transition-all duration-300 hover:scale-105">
                            <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-lg bg-yellow-500">
                                <i class="fa-solid fa-circle text-3xl text-black"></i>
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">Alufelni és gumiszerviz</h3>
                            <p class="mb-6 text-gray-300">
                                Teljes körű felni és gumi szolgáltatás, beleértve a kiegyensúlyozást is.
                            </p>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Gumiabroncs csere és kiegyensúlyozás
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Alufelni javítás és festés
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Téli és nyári gumi tárolás
                                </li>
                            </ul>
                        </div>

                        <div class="bg-dark-card rounded-lg p-8 transition-all duration-300 hover:scale-105">
                            <div class="mb-6 flex h-20 w-20 items-center justify-center rounded-lg bg-yellow-500">
                                <i class="fa-solid fa-spray-can text-3xl text-black"></i>
                            </div>
                            <h3 class="mb-4 text-2xl font-semibold">SkuloCar Kozmetika</h3>
                            <p class="mb-6 text-gray-300">
                                Autókozmetikai szolgáltatások a járművének tökéletes megjelenéséért.
                            </p>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Külső és belső tisztítás
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Polírozás és védőbevonat
                                </li>
                                <li class="flex items-center">
                                    <i class="fa-solid fa-check mr-2 text-yellow-400"></i>
                                    Motor és alváz tisztítás
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Call to Action -->
                    <div class="mt-16 text-center">
                        <h3 class="mb-4 text-2xl font-bold">Készítsen időpontot még ma!</h3>
                        <p class="mb-8 text-lg text-gray-300">
                            Kapcsoljon fel nekünk vagy küldjön üzenetet, és szívesen segítünk!
                        </p>
                        <div class="flex flex-col justify-center space-y-4 sm:flex-row sm:space-x-4 sm:space-y-0">
                            <a href="tel:+3612345678" class="ripple rounded-lg bg-yellow-500 px-8 py-3 font-semibold text-black transition-all duration-300 hover:bg-yellow-400">
                                <i class="fa-solid fa-phone mr-2"></i>
                                Hívás most
                            </a>
                            <a href="#contact" class="bg-dark-card ripple rounded-lg px-8 py-3 font-semibold text-white transition-all duration-300 hover:bg-yellow-500 hover:text-black">
                                <i class="fa-solid fa-envelope mr-2"></i>
                                Üzenet küldése
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-dark-border bg-dark-secondary border-t py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <div>
                    <h3 class="mb-4 text-2xl font-bold text-yellow-400">SkuloCar</h3>
                    <p class="text-gray-300">Autóalkatrész és szerviz</p>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">Kapcsolat</h4>
                    <p class="text-gray-300">+36 1 234 5678</p>
                    <p class="text-gray-300">info@skulocar.hu</p>
                </div>
                <div>
                    <h4 class="mb-4 text-lg font-semibold">Nyitvatartás</h4>
                    <p class="text-gray-300">H-V: 8:00-18:00</p>
                    <p class="text-gray-300">Sz: 8:00-12:00</p>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-300">© 2024 SkuloCar Kft. Minden jog fenntartva.</p>
            </div>
        </div>
    </footer>

    <!-- Modern Mobile Menu Animation System -->
    <script>
        class MobileMenuAnimations {
            constructor() {
                this.mobileMenu = document.getElementById("mobile-menu");
                this.mobileMenuBtn = document.getElementById("mobile-menu-btn");
                this.mobileMenuClose = document.getElementById("mobile-menu-close");
                this.mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
                this.mobileDropdowns = document.querySelectorAll(".mobile-dropdown-btn");
                this.menuItems = document.querySelectorAll(".mobile-menu-item");

                this.isOpen = false;
                this.startX = 0;
                this.currentX = 0;

                this.init();
            }

            init() {
                this.setupEventListeners();
                this.setupTouchGestures();
                this.setupKeyboardNavigation();
            }

            setupEventListeners() {
                // Mobile menu button
                this.mobileMenuBtn?.addEventListener("click", () => this.openMobileMenu());

                // Mobile menu close button
                this.mobileMenuClose?.addEventListener("click", () => this.closeMobileMenu());

                // Backdrop click
                this.mobileMenuBackdrop?.addEventListener("click", () => this.closeMobileMenu());

                // Mobile dropdowns
                this.mobileDropdowns.forEach(btn => {
                    btn.addEventListener("click", (e) => {
                        e.preventDefault();
                        this.toggleDropdown(btn);
                    });
                });

                // ESC key
                document.addEventListener("keydown", (e) => {
                    if (e.key === "Escape" && this.isOpen) {
                        this.closeMobileMenu();
                    }
                });
            }

            setupTouchGestures() {
                this.mobileMenu?.addEventListener("touchstart", (e) => {
                    this.startX = e.touches[0].clientX;
                });

                this.mobileMenu?.addEventListener("touchmove", (e) => {
                    if (!this.isOpen) return;

                    this.currentX = e.touches[0].clientX;
                    const diffX = this.startX - this.currentX;

                    if (diffX > 0) {
                        e.preventDefault();
                        const translateX = Math.max(-diffX, -320);
                        this.mobileMenu.style.transform = `translateX(${translateX}px)`;
                    }
                });

                this.mobileMenu?.addEventListener("touchend", () => {
                    if (!this.isOpen) return;

                    const diffX = this.startX - this.currentX;
                    if (diffX > 100) {
                        this.closeMobileMenu();
                    } else {
                        this.mobileMenu.style.transform = "";
                    }
                });
            }

            setupKeyboardNavigation() {
                // Tab navigation for mobile menu items
                this.menuItems.forEach(item => {
                    const link = item.querySelector('a, button');
                    if (link) {
                        link.addEventListener('keydown', (e) => {
                            if (e.key === 'Enter' || e.key === ' ') {
                                e.preventDefault();
                                if (link.tagName === 'A') {
                                    window.location.href = link.href;
                                } else if (link.tagName === 'BUTTON') {
                                    this.toggleDropdown(link);
                                }
                            }
                        });
                    }
                });
            }

            openMobileMenu() {
                this.isOpen = true;
                this.mobileMenu.style.display = "block";

                // Lock body scroll
                document.body.classList.add("menu-open");

                // Animate backdrop
                setTimeout(() => {
                    this.mobileMenuBackdrop.classList.add("show");
                }, 10);

                // Animate menu container
                setTimeout(() => {
                    this.mobileMenu.classList.add("show");
                }, 50);

                // Animate menu items with stagger
                this.animateMenuItems();
            }

            closeMobileMenu() {
                this.isOpen = false;

                // Unlock body scroll
                document.body.classList.remove("menu-open");

                // Animate menu items closing
                this.animateMenuItemsClosing();

                // Close menu container
                setTimeout(() => {
                    this.mobileMenu.classList.remove("show");
                }, 100);

                // Close backdrop
                setTimeout(() => {
                    this.mobileMenuBackdrop.classList.remove("show");
                }, 150);

                // Hide menu
                setTimeout(() => {
                    this.mobileMenu.style.display = "none";
                    this.resetMenuItems();
                }, 300);
            }

            animateMenuItems() {
                this.menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add("animate");
                    }, index * 100);
                });
            }

            animateMenuItemsClosing() {
                this.menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add("closing");
                    }, index * 50);
                });
            }

            resetMenuItems() {
                this.menuItems.forEach(item => {
                    item.classList.remove("animate", "closing");
                });
            }

            toggleDropdown(btn) {
                const submenu = btn.nextElementSibling;
                const chevron = btn.querySelector(".fa-chevron-down");

                if (submenu && submenu.classList.contains("mobile-submenu")) {
                    submenu.classList.toggle("show");
                    chevron.classList.toggle("rotate");
                }
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener("DOMContentLoaded", () => {
            new MobileMenuAnimations();
        });
    </script>
</body>

</html>
