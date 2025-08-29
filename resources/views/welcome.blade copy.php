<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SkuloCar - Autóalkatrész és szerviz</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=family=Inter:wght@300;400;500;600;700&display=swap&Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

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
            font-family: 'Saira', sans-serif;
        }

        /* Dark theme variables */
        :root {
            --bg-primary: #000000;
            --bg-secondary: #0a0a0a;
            --bg-card: #1a1a1a;
            --text-primary: #ffffff;
            --text-secondary: #b3b3b3;
            --border-color: #333333;
            --accent-color: #ff7e00;
            --accent-hover: #e67300;
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
            width: 320px;
            height: 100vh;
            z-index: 9999;
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

        /* Custom orange color classes */
        .text-orange-custom {
            color: #ff7e00;
        }

        .bg-orange-custom {
            background-color: #ff7e00;
        }

        .border-orange-custom {
            border-color: #ff7e00;
        }

        .hover\:text-orange-custom:hover {
            color: #ff7e00;
        }

        .hover\:bg-orange-custom:hover {
            background-color: #ff7e00;
        }

        .hover\:border-orange-custom:hover {
            border-color: #ff7e00;
        }

        /* Page to top button styles */
        #page-to-top {
            transition: all 0.3s ease;
            border-style: solid;
            border-width: 4px;
        }

        #page-to-top.scroll-0 {
            border-color: #ff7e00;
        }

        #page-to-top.scroll-25 {
            border-color: #e67300;
        }

        #page-to-top.scroll-50 {
            border-color: #cc6600;
        }

        #page-to-top.scroll-75 {
            border-color: #b35900;
        }

        #page-to-top.scroll-100 {
            border-color: #994d00;
        }

        /* Slider styles */
        .hero-slider {
            height: 750px;
            max-height: 750px;
            background: linear-gradient(135deg, #000000 0%, #1a1a1a 50%, #0a0a0a 100%);
            position: relative;
            overflow: hidden;
        }

        .hero-slider::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><defs><pattern id="grain" width="100" height="100" patternUnits="userSpaceOnUse"><circle cx="25" cy="25" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="75" cy="75" r="1" fill="%23ffffff" opacity="0.1"/><circle cx="50" cy="10" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="10" cy="60" r="0.5" fill="%23ffffff" opacity="0.1"/><circle cx="90" cy="40" r="0.5" fill="%23ffffff" opacity="0.1"/></pattern></defs><rect width="100" height="100" fill="url(%23grain)"/></svg>');
            opacity: 0.3;
        }

        /* Slider image styles */
        .hero-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .hero-content {
            position: relative;
            z-index: 2;
        }

        .hero-text {
            animation: slideInFromLeft 1s ease-out;
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .hero-image {
            animation: slideInFromRight 1s ease-out 0.3s both;
        }

        @keyframes slideInFromRight {
            from {
                transform: translateX(50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Mobile slider animations */
        @media (max-width: 768px) {
            .hero-slider {
                animation: slideInFromBottom 1s ease-out;
                height: 400px;
                max-height: 400px;
            }

            .hero-slider img {
                object-position: center center;
            }

            @keyframes slideInFromBottom {
                from {
                    transform: translateY(50px);
                    opacity: 0;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }

            .hero-text h1 {
                animation: fadeInUp 1s ease-out 0.3s both;
                text-align: center;
            }

            .hero-text {
                text-align: center;
            }

            @keyframes fadeInUp {
                from {
                    transform: translateY(30px);
                    opacity: 0;
                }

                to {
                    transform: translateY(0);
                    opacity: 1;
                }
            }
        }
    </style>
</head>

<body class="bg-dark-bg text-dark-text">
    <!-- Header -->
    <header class="bg-dark-bg border-dark-border fixed left-0 right-0 top-0 z-40 border-b">
        <div class="container mx-auto flex h-24 items-center justify-between px-4">
            <!-- Logo -->
            <div class="flex items-center">
                <a href="/" class="text-orange-custom hover:text-orange-custom text-2xl font-bold transition-all duration-300">
                    <i class="fa-solid fa-car mr-2"></i>
                    SkuloCar
                </a>
            </div>

            <!-- Desktop Navigation -->
            <nav class="desktop-menu hidden md:flex md:items-center md:space-x-3">
                <!-- Kezdőlap -->
                <a href="/" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                    <span class="font-medium">Kezdőlap</span>
                </a>

                <!-- Szerviz -->
                <div class="desktop-dropdown">
                    <button class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                        <span class="font-medium">Szerviz</span>
                        <i class="fa-solid fa-chevron-down ml-2 text-xs"></i>
                    </button>
                    <div class="desktop-dropdown-content">
                        <a href="#" class="border-l-2 border-transparent hover:border-red-500">Műhely</a>
                        <a href="#" class="border-l-2 border-transparent hover:border-red-500">Szakszervíz</a>
                        <a href="#" class="border-l-2 border-transparent hover:border-red-500">Hanggenerátor</a>
                        <a href="#" class="border-l-2 border-transparent hover:border-red-500">Referenciáink</a>
                    </div>
                </div>

                <!-- Autókozmetika -->
                <a href="#" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                    <span class="font-medium">Autókozmetika</span>
                </a>

                <!-- Alkatrész -->
                <a href="#" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                    <span class="font-medium">Alkatrész</span>
                </a>

                <!-- Felni/Gumi -->
                <a href="#" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                    <span class="font-medium">Felni/Gumi</span>
                </a>

                <!-- Árajánlat -->
                <a href="#" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                    <span class="font-medium">Árajánlat</span>
                </a>

                <!-- Kapcsolat -->
                <a href="#contact" class="rtext-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                    Kapcsolat
                </a>
            </nav>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="bg-dark-border ripple hover:bg-orange-custom flex h-10 w-10 items-center justify-center rounded-lg text-white transition-all duration-300 hover:text-black md:hidden">
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
                <div class="text-orange-custom text-xl font-bold">
                    <i class="fa-solid fa-car mr-2"></i>SkuloCar
                </div>
                <button id="mobile-menu-close" class="bg-dark-border ripple hover:bg-orange-custom flex h-8 w-8 items-center justify-center rounded-lg text-white transition-all duration-300 hover:text-black">
                    <i class="fa-solid fa-times"></i>
                </button>
            </div>

            <!-- Menu Content -->
            <div class="flex h-full flex-col">
                <nav class="flex-1 px-6 py-4">
                    <ul class="space-y-2">
                        <!-- Kezdőlap -->
                        <li class="mobile-menu-item">
                            <a href="/" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Kezdőlap</span>
                            </a>
                        </li>

                        <!-- Szerviz -->
                        <li class="mobile-menu-item mobile-dropdown-group group" data-dropdown>
                            <a href="#" onclick="toggleDropdown(this); return false;" class="dropdown-trigger ripple hover:text-orange-custom flex w-full items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Szerviz</span>
                                <i class="fa-solid fa-chevron-down mobile-dropdown-chevron text-xs transition-transform duration-300"></i>
                            </a>
                            <ul class="dropdown-content mobile-dropdown-content max-h-0 overflow-hidden transition-all duration-300 group-hover:max-h-96">
                                <li><a href="#" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Műhely</a></li>
                                <li><a href="#" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Szakszervíz</a></li>
                                <li><a href="#" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Hanggenerátor</a></li>
                                <li><a href="#" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Referenciáink</a></li>
                            </ul>
                        </li>

                        <!-- Autókozmetika -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Autókozmetika</span>
                            </a>
                        </li>

                        <!-- Alkatrész -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Alkatrész</span>
                            </a>
                        </li>

                        <!-- Felni/Gumi -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Felni/Gumi</span>
                            </a>
                        </li>

                        <!-- Árajánlat -->
                        <li class="mobile-menu-item">
                            <a href="#" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Árajánlat</span>
                            </a>
                        </li>

                        <!-- Kapcsolat -->
                        <li class="mobile-menu-item">
                            <a href="#contact" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                                <span class="font-medium">Kapcsolat</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <!-- Menu Footer -->
                <div class="border-dark-border border-t px-6 py-4">
                    <!-- Contact Info -->
                    <div class="mb-4 space-y-2">
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fa-solid fa-phone text-orange-custom mr-3"></i>
                            <span>+36 30 123 4567</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fa-solid fa-envelope text-orange-custom mr-3"></i>
                            <span>info@skulocar.hu</span>
                        </div>
                        <div class="flex items-center text-sm text-gray-300">
                            <i class="fa-solid fa-location-dot text-orange-custom mr-3"></i>
                            <span>1234 Budapest, Példa utca 1.</span>
                        </div>
                    </div>

                    <!-- Social Icons -->
                    <div class="mb-4 flex justify-center space-x-4">
                        <a href="#" class="bg-orange-custom hover:bg-orange-custom flex h-10 w-10 items-center justify-center rounded-full text-black transition-all duration-300 hover:scale-110">
                            <i class="fa-brands fa-facebook-f"></i>
                        </a>
                        <a href="#" class="bg-orange-custom hover:bg-orange-custom flex h-10 w-10 items-center justify-center rounded-full text-black transition-all duration-300 hover:scale-110">
                            <i class="fa-brands fa-instagram"></i>
                        </a>
                        <a href="#" class="bg-orange-custom hover:bg-orange-custom flex h-10 w-10 items-center justify-center rounded-full text-black transition-all duration-300 hover:scale-110">
                            <i class="fa-brands fa-youtube"></i>
                        </a>
                        <a href="#" class="bg-orange-custom hover:bg-orange-custom flex h-10 w-10 items-center justify-center rounded-full text-black transition-all duration-300 hover:scale-110">
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

    <!-- Main Content -->
    <main class="pt-24">
        <!-- Hero Slider Section -->
        <div class="hero-slider-container relative">
            <!-- Slider 1 - Main Hero -->
            <section class="hero-slider flex items-center" id="slider-1">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="SkuloCar Autószerviz" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
                </div>
                <div class="container relative z-10 mx-auto px-4">
                    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                        <!-- Left side - Text content -->
                        <div class="hero-content hero-text">
                            <h1 class="mb-6 text-4xl font-bold text-white md:text-6xl">
                                SkuloCar
                                <span class="text-orange-custom">Autószerviz</span>
                            </h1>
                            <div class="hidden md:block">
                                <p class="mb-8 text-xl leading-relaxed text-gray-300">
                                    Mindent egy helyen - professzionális autóalkatrész és szerviz szolgáltatás.
                                    Kiváló minőség, gyors kiszolgálás és megbízható szakértők.
                                </p>
                                <div class="flex flex-col gap-4 sm:flex-row">
                                    <a href="#contact" class="ripple bg-orange-custom hover:bg-orange-custom rounded-lg px-8 py-4 text-lg font-semibold text-black transition-all duration-300 hover:scale-105">
                                        <i class="fa-solid fa-phone mr-2"></i>Kapcsolat
                                    </a>
                                    <a href="/services" class="ripple border-orange-custom text-orange-custom hover:bg-orange-custom rounded-lg border-2 px-8 py-4 text-lg font-semibold transition-all duration-300 hover:text-black">
                                        <i class="fa-solid fa-tools mr-2"></i>Szolgáltatások
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Slider 2 - Services -->
            <section class="hero-slider flex hidden items-center" id="slider-2">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Professzionális Szerviz" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
                </div>
                <div class="container relative z-10 mx-auto px-4">
                    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                        <div class="hero-content hero-text">
                            <h1 class="mb-6 text-4xl font-bold text-white md:text-6xl">
                                Professzionális
                                <span class="text-orange-custom">Szerviz</span>
                            </h1>
                            <div class="hidden md:block">
                                <p class="mb-8 text-xl leading-relaxed text-gray-300">
                                    Kiváló minőségű szerviz szolgáltatás minden autómárkához.
                                    Szakértő csapatunk és modern felszerelésünk garantálja a tökéletes eredményt.
                                </p>
                                <div class="flex flex-col gap-4 sm:flex-row">
                                    <a href="/services" class="ripple bg-orange-custom hover:bg-orange-custom rounded-lg px-8 py-4 text-lg font-semibold text-black transition-all duration-300 hover:scale-105">
                                        <i class="fa-solid fa-tools mr-2"></i>Szolgáltatások
                                    </a>
                                    <a href="#contact" class="ripple border-orange-custom text-orange-custom hover:bg-orange-custom rounded-lg border-2 px-8 py-4 text-lg font-semibold transition-all duration-300 hover:text-black">
                                        <i class="fa-solid fa-phone mr-2"></i>Időpontfoglalás
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Slider 3 - Parts -->
            <section class="hero-slider flex hidden items-center" id="slider-3">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Autóalkatrészek Katalógus" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
                </div>
                <div class="container relative z-10 mx-auto px-4">
                    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                        <div class="hero-content hero-text">
                            <h1 class="mb-6 text-4xl font-bold text-white md:text-6xl">
                                Autóalkatrészek
                                <span class="text-orange-custom">Katalógus</span>
                            </h1>
                            <div class="hidden md:block">
                                <p class="mb-8 text-xl leading-relaxed text-gray-300">
                                    Széles választék autóalkatrészekből minden márkához és típushoz.
                                    Gyári és utángyártott termékek garantált minőségben.
                                </p>
                                <div class="flex flex-col gap-4 sm:flex-row">
                                    <a href="#" class="ripple bg-orange-custom hover:bg-orange-custom rounded-lg px-8 py-4 text-lg font-semibold text-black transition-all duration-300 hover:scale-105">
                                        <i class="fa-solid fa-search mr-2"></i>Alkatrészek keresése
                                    </a>
                                    <a href="#contact" class="ripple border-orange-custom text-orange-custom hover:bg-orange-custom rounded-lg border-2 px-8 py-4 text-lg font-semibold transition-all duration-300 hover:text-black">
                                        <i class="fa-solid fa-phone mr-2"></i>Árajánlat
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Slider 4 - Cars -->
            <section class="hero-slider flex hidden items-center" id="slider-4">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Autókereskedés SkuloCar" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
                </div>
                <div class="container relative z-10 mx-auto px-4">
                    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                        <div class="hero-content hero-text">
                            <h1 class="mb-6 text-4xl font-bold text-white md:text-6xl">
                                Autókereskedés
                                <span class="text-orange-custom">SkuloCar</span>
                            </h1>
                            <div class="hidden md:block">
                                <p class="mb-8 text-xl leading-relaxed text-gray-300">
                                    Új és használt autók széles választéka.
                                    Minden járművünk alapos átvizsgáláson esett át és garantált minőségű.
                                </p>
                                <div class="flex flex-col gap-4 sm:flex-row">
                                    <a href="#" class="ripple bg-orange-custom hover:bg-orange-custom rounded-lg px-8 py-4 text-lg font-semibold text-black transition-all duration-300 hover:scale-105">
                                        <i class="fa-solid fa-car mr-2"></i>Autók böngészése
                                    </a>
                                    <a href="#contact" class="ripple border-orange-custom text-orange-custom hover:bg-orange-custom rounded-lg border-2 px-8 py-4 text-lg font-semibold transition-all duration-300 hover:text-black">
                                        <i class="fa-solid fa-phone mr-2"></i>Érdeklődés
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Slider 5 - Contact -->
            <section class="hero-slider flex hidden items-center" id="slider-5">
                <div class="absolute inset-0">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="Kapcsolat SkuloCar" class="h-full w-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
                </div>
                <div class="container relative z-10 mx-auto px-4">
                    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                        <div class="hero-content hero-text">
                            <h1 class="mb-6 text-4xl font-bold text-white md:text-6xl">
                                Kapcsolat
                                <span class="text-orange-custom">SkuloCar</span>
                            </h1>
                            <div class="hidden md:block">
                                <p class="mb-8 text-xl leading-relaxed text-gray-300">
                                    Keressen minket bizalommal! Szakértő csapatunk mindig rendelkezésre áll,
                                    hogy segítsen autója tökéletes állapotban tartásában.
                                </p>
                                <div class="flex flex-col gap-4 sm:flex-row">
                                    <a href="#contact" class="ripple bg-orange-custom hover:bg-orange-custom rounded-lg px-8 py-4 text-lg font-semibold text-black transition-all duration-300 hover:scale-105">
                                        <i class="fa-solid fa-phone mr-2"></i>Hívás most
                                    </a>
                                    <a href="#contact" class="ripple border-orange-custom text-orange-custom hover:bg-orange-custom rounded-lg border-2 px-8 py-4 text-lg font-semibold transition-all duration-300 hover:text-black">
                                        <i class="fa-solid fa-envelope mr-2"></i>Email küldése
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Slider Navigation - Auto-generated dots -->
            <div class="absolute bottom-8 left-1/2 z-10 flex -translate-x-1/2 space-x-4" id="slider-dots">
                <!-- Dots will be generated automatically by JavaScript -->
            </div>

            <!-- Slider Arrows -->
            <button class="absolute left-4 top-1/2 z-10 -translate-y-1/2 rounded-full bg-black/50 p-3 text-white transition-all duration-300 hover:bg-black/70" id="prev-slider">
                <i class="fa-solid fa-chevron-left text-xl"></i>
            </button>
            <button class="absolute right-4 top-1/2 z-10 -translate-y-1/2 rounded-full bg-black/50 p-3 text-white transition-all duration-300 hover:bg-black/70" id="next-slider">
                <i class="fa-solid fa-chevron-right text-xl"></i>
            </button>
        </div>
        </div>

        <!-- About Section -->
        <section class="bg-dark-bg py-16">
            <div class="container mx-auto px-4">
                <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                    <!-- Left side - Text content -->
                    <div class="space-y-6">
                        <h2 class="text-3xl font-bold text-white md:text-4xl">
                            Üdvözöli Önt a <span class="text-orange-custom">SkuloCar Kft.</span>!
                        </h2>
                        <h3 class="text-orange-custom text-xl font-semibold">
                            Mindent egy helyen...
                        </h3>
                        <div class="space-y-4 text-gray-300">
                            <p>
                                Cégünk 2017-ben alakult, magántulajdonú vállalkozásként, melynek fő tevékenységi köre a gépjármű alkatrész kereskedelem. Foglalkozunk gyári, illetve magasan kvalifikált utángyártott alkatrészekkel is, minden autótípushoz.
                            </p>
                            <p>
                                Több nagy beszállítóval is kapcsolatban állunk, így mindent megteszünk annak érdekében, hogy partnereink különféle termékekből választhassanak. Fontos számunkra a megbízhatóság, magas színvonalon történő gyors, és pontos kiszolgálás.
                            </p>
                            <p>
                                Előnyünkre válik, hogy napi 8-10 alkalommal kapunk árut, 6-7 beszállítótól is, ami csak bővült nyitásunk óta.
                            </p>
                        </div>
                    </div>

                    <!-- Right side - Image (hidden on mobile) -->
                    <div class="hidden lg:block">
                        <div class="relative overflow-hidden rounded-lg">
                            <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="SkuloCar műhely" class="h-96 w-full object-cover">
                            <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section class="bg-dark-secondary py-16">
            <div class="container mx-auto px-4">
                <h2 class="mb-12 text-center text-3xl font-bold">Szolgáltatásaink</h2>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="bg-dark-card group relative overflow-hidden rounded-lg p-6 transition-all duration-300 hover:scale-105">
                        <div class="bg-orange-custom group-hover:bg-orange-custom mb-4 flex h-16 w-16 items-center justify-center rounded-lg transition-all duration-300">
                            <i class="fa-solid fa-cogs text-2xl text-black transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">Autóalkatrész és felszerelés</h3>
                        <p class="mb-4 text-gray-300">Széles választék autóalkatrészekből és felszerelésekből minden márkához és típushoz. Gyári és utángyártott termékek garantált minőségben, gyors szállítással.</p>
                        <a href="#" class="text-orange-custom hover:text-orange-custom inline-flex items-center transition-all duration-300 hover:translate-x-1">
                            <span class="mr-2">Tovább</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>

                    <div class="bg-dark-card group relative overflow-hidden rounded-lg p-6 transition-all duration-300 hover:scale-105">
                        <div class="bg-orange-custom group-hover:bg-orange-custom mb-4 flex h-16 w-16 items-center justify-center rounded-lg transition-all duration-300">
                            <i class="fa-solid fa-wrench text-2xl text-black transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">Gépjármű szerviz</h3>
                        <p class="mb-4 text-gray-300">Professzionális szerviz szolgáltatás kiváló minőségben és gyors kiszolgálással. Diagnosztika, javítás, olajcsere és minden típusú szerviz munka.</p>
                        <a href="#" class="text-orange-custom hover:text-orange-custom inline-flex items-center transition-all duration-300 hover:translate-x-1">
                            <span class="mr-2">Tovább</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>

                    <div class="bg-dark-card group relative overflow-hidden rounded-lg p-6 transition-all duration-300 hover:scale-105">
                        <div class="bg-orange-custom group-hover:bg-orange-custom mb-4 flex h-16 w-16 items-center justify-center rounded-lg transition-all duration-300">
                            <i class="fa-solid fa-circle text-2xl text-black transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">Alufelni és gumiszerviz</h3>
                        <p class="mb-4 text-gray-300">Teljes körű felni és gumi szolgáltatás, beleértve a kiegyensúlyozást is. Gumiabroncs csere, alufelni javítás és festés, téli-nyári gumi tárolás.</p>
                        <a href="#" class="text-orange-custom hover:text-orange-custom inline-flex items-center transition-all duration-300 hover:translate-x-1">
                            <span class="mr-2">Tovább</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>

                    <div class="bg-dark-card group relative overflow-hidden rounded-lg p-6 transition-all duration-300 hover:scale-105">
                        <div class="bg-orange-custom group-hover:bg-orange-custom mb-4 flex h-16 w-16 items-center justify-center rounded-lg transition-all duration-300">
                            <i class="fa-solid fa-spray-can text-2xl text-black transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">SkuloCar Kozmetika</h3>
                        <p class="mb-4 text-gray-300">Autókozmetikai szolgáltatások a járművének tökéletes megjelenéséért. Külső és belső tisztítás, polírozás, védőbevonat, motor és alváz tisztítás.</p>
                        <a href="#" class="text-orange-custom hover:text-orange-custom inline-flex items-center transition-all duration-300 hover:translate-x-1">
                            <span class="mr-2">Tovább</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>

                    <div class="bg-dark-card group relative overflow-hidden rounded-lg p-6 transition-all duration-300 hover:scale-105">
                        <div class="bg-orange-custom group-hover:bg-orange-custom mb-4 flex h-16 w-16 items-center justify-center rounded-lg transition-all duration-300">
                            <i class="fa-solid fa-tags text-2xl text-black transition-all duration-300 group-hover:scale-110"></i>
                        </div>
                        <h3 class="mb-3 text-xl font-semibold">Folyamatos akciók</h3>
                        <p class="mb-4 text-gray-300">Rendszeres kedvezmények és akciós ajánlatok minden szolgáltatásunkra. Kövesse oldalunkat és értesüljön elsőként legújabb ajánlatainkról.</p>
                        <a href="#" class="text-orange-custom hover:text-orange-custom inline-flex items-center transition-all duration-300 hover:translate-x-1">
                            <span class="mr-2">Tovább</span>
                            <i class="fa-solid fa-arrow-right text-sm"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="bg-dark-bg py-16">
            <div class="container mx-auto px-4">
                <h2 class="mb-12 text-center text-3xl font-bold">Lépjen velünk kapcsolatba</h2>
                <div class="mx-auto max-w-2xl">
                    <form class="space-y-6">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <input type="text" placeholder="Név" class="bg-dark-card focus:border-orange-custom w-full rounded-lg border border-gray-600 px-4 py-3 focus:outline-none">
                            <input type="tel" placeholder="Telefon" class="bg-dark-card focus:border-orange-custom w-full rounded-lg border border-gray-600 px-4 py-3 focus:outline-none">
                        </div>
                        <input type="email" placeholder="Email" class="bg-dark-card focus:border-orange-custom w-full rounded-lg border border-gray-600 px-4 py-3 focus:outline-none">
                        <textarea rows="5" placeholder="Üzenet" class="bg-dark-card focus:border-orange-custom w-full rounded-lg border border-gray-600 px-4 py-3 focus:outline-none"></textarea>
                        <button type="submit" class="ripple bg-orange-custom hover:bg-orange-custom w-full rounded-lg py-3 font-semibold text-black transition-all duration-300">
                            <i class="fa-solid fa-paper-plane mr-2"></i>Üzenet küldése
                        </button>
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="border-dark-border bg-dark-secondary border-t py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                <!-- First Block - Logo and Contact Info -->
                <div>
                    <div class="mb-4">
                        <h3 class="text-orange-custom text-2xl font-bold">
                            <i class="fa-solid fa-car mr-2"></i>SkuloCar
                        </h3>
                        <p class="mt-2 text-gray-300">Autóalkatrész és szerviz</p>
                    </div>
                    <div class="space-y-3">
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-map-marker-alt text-orange-custom mr-3"></i>
                            <span>1234 Budapest, Példa utca 123.</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-phone text-orange-custom mr-3"></i>
                            <span>+36 1 234 5678</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-envelope text-orange-custom mr-3"></i>
                            <span>info@skulocar.hu</span>
                        </div>
                        <div class="flex items-center text-gray-300">
                            <i class="fa-solid fa-clock text-orange-custom mr-3"></i>
                            <span>H-V: 8:00-18:00 | Sz: 8:00-12:00</span>
                        </div>
                    </div>
                </div>

                <!-- Second Block - Menu Items -->
                <div>
                    <h4 class="mb-6 text-lg font-semibold text-white">Menüpontok</h4>
                    <div class="grid grid-cols-1 gap-2">
                        <a href="/" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            Főoldal
                        </a>
                        <a href="/services" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            Szolgáltatások
                        </a>
                        <a href="#" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            Autók
                        </a>
                        <a href="#" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            Alkatrészek
                        </a>
                        <a href="#" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            Rólunk
                        </a>
                        <a href="#contact" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            Kapcsolat
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
                        <input type="email" placeholder="Email cím" class="bg-dark-card focus:border-orange-custom w-full rounded-lg border border-gray-600 px-4 py-3 focus:outline-none">
                        <button type="submit" class="ripple bg-orange-custom hover:bg-orange-custom w-full rounded-lg py-3 font-semibold text-black transition-all duration-300">
                            <i class="fa-solid fa-envelope mr-2"></i>Feliratkozás
                        </button>
                    </form>
                    <div class="mt-4 flex space-x-4">
                        <a href="#" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            <i class="fa-brands fa-facebook text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            <i class="fa-brands fa-instagram text-xl"></i>
                        </a>
                        <a href="#" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                            <i class="fa-brands fa-youtube text-xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8">
                <div class="flex flex-col items-center justify-between gap-4 md:flex-row">
                    <p class="text-gray-300">© 2024 SkuloCar Kft. Minden jog fenntartva.</p>
                    <div class="flex items-center gap-2 text-gray-400">
                        <span class="text-sm">Powered by:</span>
                        <div class="flex items-center gap-1">
                            <a href="#"> <i class="fa-solid fa-code text-orange-custom"></i>
                                <span class="text-orange-custom font-semibold">FarkasTamas</span>
                                <span class="text-sm">.dev</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Page to Top Button -->
    <button id="page-to-top" class="fixed bottom-8 right-8 z-50 hidden h-12 w-12 items-center justify-center rounded-full border-4 border-transparent bg-yellow-500 text-black transition-all duration-300 hover:scale-110 hover:bg-yellow-400">
        <i class="fa-solid fa-chevron-up text-xl"></i>
    </button>

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

                // Backdrop click - removed completely
                // this.mobileMenuBackdrop?.addEventListener("click", (e) => {
                //     e.stopPropagation();
                // });

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
            new HeroSlider();
            new PageToTop();
        });

        // Hero Slider Class
        class HeroSlider {
            constructor() {
                this.currentSlide = 1;
                this.totalSlides = 5;
                this.slides = document.querySelectorAll('.hero-slider');
                this.navButtons = document.querySelectorAll('.slider-nav-btn');
                this.prevBtn = document.getElementById('prev-slider');
                this.nextBtn = document.getElementById('next-slider');
                this.dotsContainer = document.getElementById('slider-dots');

                this.init();
            }

            init() {
                this.setupEventListeners();
                this.generateDots();
                this.startAutoSlide();
            }

            setupEventListeners() {
                // Navigation buttons
                this.navButtons.forEach(btn => {
                    btn.addEventListener('click', (e) => {
                        const slideNumber = parseInt(e.target.dataset.slider);
                        this.goToSlide(slideNumber);
                    });
                });

                // Arrow buttons
                this.prevBtn?.addEventListener('click', () => this.prevSlide());
                this.nextBtn?.addEventListener('click', () => this.nextSlide());

                // Auto slide on hover pause
                const sliderContainer = document.querySelector('.hero-slider-container');
                sliderContainer?.addEventListener('mouseenter', () => this.pauseAutoSlide());
                sliderContainer?.addEventListener('mouseleave', () => this.startAutoSlide());
            }

            generateDots() {
                this.dotsContainer.innerHTML = ''; // Clear existing dots
                for (let i = 1; i <= this.totalSlides; i++) {
                    const dot = document.createElement('button');
                    dot.classList.add('slider-nav-btn', 'h-3', 'w-3', 'rounded-full', 'transition-all', 'duration-300', 'hover:bg-white');
                    dot.setAttribute('data-slider', i);

                    // Set initial state
                    if (i === 1) {
                        dot.classList.add('bg-white/50');
                    } else {
                        dot.classList.add('bg-white/30');
                    }

                    this.dotsContainer.appendChild(dot);
                }

                // Update navButtons reference after generating dots
                this.navButtons = document.querySelectorAll('.slider-nav-btn');
            }

            goToSlide(slideNumber) {
                // Hide all slides
                this.slides.forEach(slide => slide.classList.add('hidden'));

                // Show current slide
                const currentSlide = document.getElementById(`slider-${slideNumber}`);
                currentSlide?.classList.remove('hidden');

                // Update navigation buttons
                this.navButtons.forEach(btn => {
                    btn.classList.remove('bg-white/50');
                    btn.classList.add('bg-white/30');
                });

                const activeBtn = document.querySelector(`[data-slider="${slideNumber}"]`);
                activeBtn?.classList.remove('bg-white/30');
                activeBtn?.classList.add('bg-white/50');

                this.currentSlide = slideNumber;
            }

            nextSlide() {
                const nextSlide = this.currentSlide === this.totalSlides ? 1 : this.currentSlide + 1;
                this.goToSlide(nextSlide);
            }

            prevSlide() {
                const prevSlide = this.currentSlide === 1 ? this.totalSlides : this.currentSlide - 1;
                this.goToSlide(prevSlide);
            }

            startAutoSlide() {
                this.autoSlideInterval = setInterval(() => {
                    this.nextSlide();
                }, 5000); // Change slide every 5 seconds
            }

            pauseAutoSlide() {
                if (this.autoSlideInterval) {
                    clearInterval(this.autoSlideInterval);
                }
            }
        }

        // Page to Top Class
        class PageToTop {
            constructor() {
                this.button = document.getElementById('page-to-top');
                this.init();
            }

            init() {
                this.setupEventListeners();
                this.updateButtonVisibility();
            }

            setupEventListeners() {
                // Scroll event listener
                window.addEventListener('scroll', () => {
                    this.updateButtonVisibility();
                    this.updateBorderColor();
                });

                // Click event listener
                this.button?.addEventListener('click', () => {
                    this.scrollToTop();
                });
            }

            updateButtonVisibility() {
                if (window.scrollY > 300) {
                    this.button?.classList.remove('hidden');
                    this.button?.classList.add('flex');
                } else {
                    this.button?.classList.add('hidden');
                    this.button?.classList.remove('flex');
                }
            }

            updateBorderColor() {
                const scrollTop = window.scrollY;
                const documentHeight = document.documentElement.scrollHeight - window.innerHeight;
                const scrollPercentage = (scrollTop / documentHeight) * 100;

                // Remove all scroll classes
                this.button?.classList.remove('scroll-0', 'scroll-25', 'scroll-50', 'scroll-75', 'scroll-100');

                // Add appropriate class based on scroll percentage
                if (scrollPercentage <= 25) {
                    this.button?.classList.add('scroll-0');
                } else if (scrollPercentage <= 50) {
                    this.button?.classList.add('scroll-25');
                } else if (scrollPercentage <= 75) {
                    this.button?.classList.add('scroll-50');
                } else if (scrollPercentage <= 90) {
                    this.button?.classList.add('scroll-75');
                } else {
                    this.button?.classList.add('scroll-100');
                }
            }

            scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }
        }
    </script>
</body>

</html>
