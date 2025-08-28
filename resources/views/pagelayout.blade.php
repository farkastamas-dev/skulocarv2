<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SkuloCar - Autóalkatrész és szerviz')</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Global dropdown function - must be in head -->
    <script>
        window.toggleDropdown = function(trigger) {
            const dropdownItem = trigger.closest('[data-dropdown]');
            const dropdownContent = dropdownItem.querySelector('.dropdown-content');
            const chevron = trigger.querySelector('i');

            // Toggle dropdown
            if (dropdownContent.classList.contains('open')) {
                dropdownContent.classList.remove('open');
                trigger.classList.remove('active');
                chevron.style.transform = 'rotate(0deg)';
            } else {
                dropdownContent.classList.add('open');
                trigger.classList.add('active');
                chevron.style.transform = 'rotate(180deg)';
            }
        };
    </script>

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

        /* Mobile menu styles */
        #mobile-menu {
            display: none;
            position: fixed;
            top: 0;
            right: 0;
            width: 100%;
            max-width: 320px;
            height: 100vh;
            z-index: 9999;
            transform: translateX(100%);
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Ensure mobile menu doesn't overflow on small screens */
        @media (max-width: 320px) {
            #mobile-menu {
                width: 100%;
                max-width: 100%;
            }
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
            background-color: rgba(0, 0, 0, 0.7);
            z-index: 998;
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }

        /* .mobile-menu-backdrop.show {
            opacity: 1;
        } */

        /* Prevent scrolling when mobile menu is open */
        body.menu-open {
            overflow: hidden;
            position: fixed;
            width: 100%;
        }

        .mobile-menu-container {
            position: absolute;
            right: 0;
            top: 0;
            height: 100%;
            width: 100%;
            background: linear-gradient(to bottom, #1a1a1a, #2a2a2a, #1a1a1a);
            box-shadow: -4px 0 20px rgba(0, 0, 0, 0.3);
            pointer-events: auto;
        }

        .mobile-menu-item {
            opacity: 0;
            transform: translateX(20px);
            transition: all 0.3s ease;
            margin-bottom: 0.25rem;
        }

        .mobile-menu-item.animate {
            opacity: 1;
            transform: translateX(0);
        }

        .mobile-menu-item.closing {
            opacity: 0;
            transform: translateX(20px);
        }

        /* Mobile dropdown styles - CSS only fallback */
        .dropdown-content {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
            background-color: rgba(0, 0, 0, 0.1);
            border-radius: 0.5rem;
            margin-top: 0.5rem;
            padding: 0 0.5rem;
        }

        .dropdown-content.open {
            max-height: 300px;
            padding: 0.5rem;
        }

        .dropdown-trigger.active i {
            transform: rotate(180deg);
        }

        /* Tailwind CSS fallback for mobile dropdown */
        .mobile-dropdown-group:hover .mobile-dropdown-content {
            max-height: 300px;
            padding: 0.5rem;
        }

        .mobile-dropdown-group:hover .mobile-dropdown-chevron {
            transform: rotate(180deg);
        }

        .fa-chevron-down {
            transition: transform 0.3s ease;
        }

        .fa-chevron-down.rotate {
            transform: rotate(180deg);
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
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }

        .desktop-dropdown:hover .desktop-dropdown-content {
            display: block;
            opacity: 1;
            transform: translateY(0);
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

        /* Desktop menu hover effects */
        .desktop-menu a {
            transition: all 0.3s ease;
        }

        .desktop-menu a:hover {
            color: #fbbf24 !important;
            transform: translateY(-2px);
        }

        /* Desktop dropdown hover effects */
        .desktop-dropdown:hover .desktop-dropdown-content {
            display: block !important;
            opacity: 1 !important;
            transform: translateY(0) !important;
        }

        .desktop-dropdown-content a:hover {
            background-color: #333333 !important;
            color: #fbbf24 !important;
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

        /* Body scroll lock */
        body.menu-open {
            overflow: hidden;
        }

        /* Page Hero styles */
        .page-hero {
            height: 350px;
            max-height: 350px;
            background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%);
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        /* Breadcrumb styles */
        .breadcrumb {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            font-size: 0.875rem;
            color: #b3b3b3;
        }

        .breadcrumb a {
            color: #fbbf24;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .breadcrumb a:hover {
            color: #f59e0b;
        }

        .breadcrumb .separator {
            color: #666666;
        }
    </style>
</head>

<body class="bg-dark-bg text-dark-text">
    <!-- Header -->
    <header class="bg-dark-bg border-dark-border fixed left-0 right-0 top-0 z-40 border-b">
        <div class="container mx-auto flex h-24 items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-2xl font-bold text-yellow-400 transition-all duration-300 hover:text-yellow-300">
                    <i class="fa-solid fa-car mr-2"></i>
                    SkuloCar
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="desktop-menu hidden md:flex md:items-center md:space-x-3">
                <!-- Kezdőlap -->
                <a href="/" class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Kezdőlap</span>
                </a>

                <!-- Szerviz -->
                <div class="desktop-dropdown">
                    <button class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
                        <span class="font-medium">Szerviz</span>
                        <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="desktop-dropdown-content">
                        <a href="#">Műhely</a>
                        <a href="#">Szakszervíz</a>
                        <a href="#">Hanggenerátor</a>
                        <a href="#">Referenciáink</a>
                    </div>
                </div>

                <!-- Autókozmetika -->
                <a href="#" class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Autókozmetika</span>
                </a>

                <!-- Alkatrész -->
                <a href="#" class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Alkatrész</span>
                </a>

                <!-- Felni/Gumi -->
                <a href="#" class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Felni/Gumi</span>
                </a>

                <!-- Árajánlat -->
                <a href="#" class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
                    <span class="font-medium">Árajánlat</span>
                </a>

                <!-- Kapcsolat -->
                <a href="#contact" class="text-dark-text px-3 py-2 transition-all duration-300 hover:text-yellow-400">
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
    <div id="mobile-menu">
        <div id="mobile-menu-backdrop" class="mobile-menu-backdrop"></div>
        <div class="mobile-menu-container">
            <!-- Menu Header -->
            <div class="border-dark-border flex h-16 items-center justify-between border-b px-6">
                <div class="text-xl font-bold text-yellow-400">
                    <i class="fa-solid fa-car mr-2"></i>SkuloCar
                </div>
                <button id="mobile-menu-close" class="bg-dark-border ripple flex h-8 w-8 items-center justify-center rounded-lg text-white transition-all duration-300 hover:bg-yellow-500 hover:text-black">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <!-- Menu Content -->
            <div class="flex h-full flex-col">
                <nav class="flex-1 px-6 py-4">
                    <ul class="space-y-2">
                        <!-- Kezdőlap -->
                        <li class="mobile-menu-item">
                            <a href="/" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-home mr-2"></i>Kezdőlap</span>
                            </a>
                        </li>

                        <!-- Szerviz -->
                        <li class="mobile-menu-item mobile-dropdown-group group" data-dropdown>
                            <a href="#" onclick="toggleDropdown(this); return false;" class="dropdown-trigger ripple flex w-full items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-tools mr-2"></i>Szerviz</span>
                                <i class="fa-solid fa-chevron-down mobile-dropdown-chevron text-xs transition-transform duration-300"></i>
                            </a>
                            <ul class="dropdown-content mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 group-hover:max-h-96">
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400"><i class="fa-solid fa-wrench mr-2"></i>Műhely</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400"><i class="fa-solid fa-tools mr-2"></i>Szakszervíz</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400"><i class="fa-solid fa-volume-high mr-2"></i>Hanggenerátor</a></li>
                                <li><a href="#" class="block py-2 pl-4 text-gray-300 transition-colors duration-300 hover:text-yellow-400"><i class="fa-solid fa-star mr-2"></i>Referenciáink</a></li>
                            </ul>
                        </li>

                        <!-- Autókozmetika -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-spray-can mr-2"></i>Autókozmetika</span>
                            </a>
                        </li>

                        <!-- Alkatrész -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-cogs mr-2"></i>Alkatrész</span>
                            </a>
                        </li>

                        <!-- Felni/Gumi -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-circle mr-2"></i>Felni/Gumi</span>
                            </a>
                        </li>

                        <!-- Árajánlat -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-calculator mr-2"></i>Árajánlat</span>
                            </a>
                        </li>

                        <!-- Kapcsolat -->
                        <li class="mobile-menu-item">
                            <a href="#contact" class="ripple flex items-center justify-between py-3 text-white transition-all duration-300 hover:text-yellow-400">
                                <span class="font-medium"><i class="fa-solid fa-phone mr-2"></i>Kapcsolat</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Menu Footer -->
                <div class="border-dark-border border-t px-6 py-4">
                    <!-- Contact Info -->
                    <div class="mb-4 space-y-2">
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fa-solid fa-phone mr-3 text-yellow-400"></i>
                            <span>+36 30 123 4567</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fa-solid fa-envelope mr-3 text-yellow-400"></i>
                            <span>info@skulocar.hu</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fa-solid fa-location-dot mr-3 text-yellow-400"></i>
                            <span>1234 Budapest, Példa utca 1.</span>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div class="mb-4 flex justify-center space-x-4">
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-500 text-black transition-all duration-300 hover:scale-110 hover:bg-yellow-400">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-500 text-black transition-all duration-300 hover:scale-110 hover:bg-yellow-400">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-500 text-black transition-all duration-300 hover:scale-110 hover:bg-yellow-400">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#" class="flex h-10 w-10 items-center justify-center rounded-full bg-yellow-500 text-black transition-all duration-300 hover:scale-110 hover:bg-yellow-400">
                            <i class="fa-brands fa-tiktok"></i>
                        </a>
                    </div>

                    <!-- Copyright -->
                    <div class="text-center text-sm text-gray-400">
                        <p>© 2024 SkuloCar Kft.</p>
                        <p class="mt-1">Minden jog fenntartva</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Hero Section -->
    <section class="page-hero flex items-center" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="container mx-auto px-4">
            <div class="relative z-10 flex items-center justify-start">
                <div class="max-w-2xl">
                    <!-- Page Title -->
                    <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl">
                        @yield('page-title', 'Oldal címe')
                    </h1>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a href="/">Kezdőlap</a>
                        <span class="separator">/</span>
                        @yield('breadcrumb', 'Aktuális oldal')
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="pt-16">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="border-dark-border bg-dark-secondary border-t py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- First Block - Logo and Contact Info -->
                <div>
                    <div class="mb-4">
                        <h3 class="text-2xl font-bold text-yellow-400">
                            <i class="fa-solid fa-car mr-2"></i>SkuloCar
                        </h3>
                        <p class="mt-2 text-gray-300">Autóalkatrész és szerviz</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-map-marker-alt mr-3 text-yellow-400"></i>
                            <span>1234 Budapest, Példa utca 123.</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-phone mr-3 text-yellow-400"></i>
                            <span>+36 1 234 5678</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-envelope mr-3 text-yellow-400"></i>
                            <span>info@skulocar.hu</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-clock mr-3 text-yellow-400"></i>
                            <span>H-V: 8:00-18:00 | Sz: 8:00-12:00</span>
                        </div>
                    </div>
                </div>

                <!-- Second Block - Menu Items -->
                <div>
                    <h4 class="mb-6 text-lg font-semibold text-white">Menüpontok</h4>
                    <div class="grid grid-cols-1 gap-2">
                        <a href="/" class="flex items-center text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-solid fa-home mr-2"></i>Főoldal
                        </a>
                        <a href="/services" class="flex items-center text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-solid fa-tools mr-2"></i>Szolgáltatások
                        </a>
                        <a href="#" class="flex items-center text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-solid fa-car mr-2"></i>Autók
                        </a>
                        <a href="#" class="flex items-center text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-solid fa-cogs mr-2"></i>Alkatrészek
                        </a>
                        <a href="#" class="flex items-center text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-solid fa-info-circle mr-2"></i>Rólunk
                        </a>
                        <a href="#contact" class="flex items-center text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-solid fa-phone mr-2"></i>Kapcsolat
                        </a>
                    </div>
                </div>

                <!-- Third Block - Newsletter Subscription -->
                <div>
                    <h4 class="mb-6 text-lg font-semibold text-white">Hírlevél feliratkozás</h4>
                    <p class="mb-4 text-gray-300">
                        Iratkozzon fel hírlevelünkre, hogy elsőként értesüljön legújabb ajánlatainkról és szolgáltatásainkról!
                    </p>
                    <form class="space-y-3">
                        <input type="email" placeholder="Email cím" class="bg-dark-card w-full rounded-lg border border-gray-600 px-4 py-3 focus:border-yellow-500 focus:outline-none">
                        <button type="submit" class="ripple w-full rounded-lg bg-yellow-500 py-3 font-semibold text-black transition-all duration-300 hover:bg-yellow-400">
                            <i class="fa-solid fa-envelope mr-2"></i>Feliratkozás
                        </button>
                    </form>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-brands fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-brands fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 transition-colors duration-300 hover:text-yellow-400">
                            <i class="fa-brands fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-300">© 2024 SkuloCar Kft. Minden jog fenntartva.</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript -->
    <script>
        // Global dropdown function now defined in head section

        class MobileMenuAnimations {
            constructor() {
                this.mobileMenu = document.getElementById("mobile-menu");
                this.mobileMenuBtn = document.getElementById("mobile-menu-btn");
                this.mobileMenuClose = document.getElementById("mobile-menu-close");
                this.mobileMenuBackdrop = document.getElementById("mobile-menu-backdrop");
                this.isOpen = false;
                this.init();
            }

            init() {
                this.setupEventListeners();
            }

            setupEventListeners() {
                // Mobile menu button
                this.mobileMenuBtn?.addEventListener("click", (e) => {
                    e.stopPropagation();
                    this.openMobileMenu();
                });

                // Mobile menu close button
                this.mobileMenuClose?.addEventListener("click", (e) => {
                    e.stopPropagation();
                    this.closeMobileMenu();
                });

                // ESC key
                document.addEventListener("keydown", (e) => {
                    if (e.key === "Escape" && this.isOpen) {
                        this.closeMobileMenu();
                    }
                });

                // Prevent menu close when clicking inside menu content
                const mobileMenuContainer = document.querySelector('.mobile-menu-container');
                mobileMenuContainer?.addEventListener("click", (e) => {
                    e.stopPropagation();
                });

                // Mobile dropdown handling - direct event listeners
                const dropdownTriggers = document.querySelectorAll('.dropdown-trigger');
                dropdownTriggers.forEach(trigger => {
                    trigger.addEventListener('click', (e) => {
                        console.log('Dropdown trigger clicked directly');
                        e.preventDefault();
                        e.stopPropagation();
                        this.toggleMobileDropdown(trigger);
                    });
                });

                // Also keep the document listener as backup
                document.addEventListener("click", (e) => {
                    console.log('Click event fired');
                    const dropdownTrigger = e.target.closest('.dropdown-trigger');
                    console.log('dropdownTrigger:', dropdownTrigger);
                    console.log('this.isOpen:', this.isOpen);

                    if (dropdownTrigger && this.isOpen) {
                        console.log('Dropdown trigger clicked');
                        e.preventDefault();
                        e.stopPropagation();
                        this.toggleMobileDropdown(dropdownTrigger);
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

                // Animate menu items
                const menuItems = document.querySelectorAll(".mobile-menu-item");
                menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add("animate");
                    }, index * 100);
                });
            }

            closeMobileMenu() {
                this.isOpen = false;

                // Unlock body scroll
                document.body.classList.remove("menu-open");

                // Animate menu items closing
                const menuItems = document.querySelectorAll(".mobile-menu-item");
                menuItems.forEach((item, index) => {
                    setTimeout(() => {
                        item.classList.add("closing");
                    }, index * 50);
                });

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
                    // Reset menu items
                    menuItems.forEach(item => {
                        item.classList.remove("animate", "closing");
                    });
                }, 300);
            }

            toggleMobileDropdown(trigger) {
                console.log('toggleMobileDropdown called');
                const dropdownItem = trigger.closest('[data-dropdown]');
                const dropdownContent = dropdownItem.querySelector('.dropdown-content');
                const chevron = trigger.querySelector('i');

                console.log('dropdownItem:', dropdownItem);
                console.log('dropdownContent:', dropdownContent);

                // Close all other dropdowns first
                const allDropdowns = document.querySelectorAll('[data-dropdown]');
                allDropdowns.forEach(item => {
                    if (item !== dropdownItem) {
                        const content = item.querySelector('.dropdown-content');
                        const icon = item.querySelector('.dropdown-trigger i');
                        content.classList.remove('open');
                        item.querySelector('.dropdown-trigger').classList.remove('active');
                    }
                });

                // Toggle current dropdown
                dropdownContent.classList.toggle('open');
                trigger.classList.toggle('active');

                console.log('Dropdown toggled, open class:', dropdownContent.classList.contains('open'));
            }
        }

        // Initialize when DOM is loaded
        document.addEventListener("DOMContentLoaded", () => {
            new MobileMenuAnimations();
        });
    </script>
</body>

</html>
