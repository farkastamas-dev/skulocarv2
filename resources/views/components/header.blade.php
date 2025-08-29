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
                    <a href="{{ url('/szerviz') }}" class="border-l-2 border-transparent hover:border-[#ff7e00]">Műhely</a>
                    <a href="{{ url('/szakszerviz') }}" class="border-l-2 border-transparent hover:border-[#ff7e00]">Szakszervíz</a>
                    <a href="{{ url('/hanggenerator') }}" class="border-l-2 border-transparent hover:border-[#ff7e00]">Hanggenerátor</a>
                    <a href="{{ url('/referenciaink') }}" class="border-l-2 border-transparent hover:border-[#ff7e00]">Referenciáink</a>
                </div>
            </div>

            <!-- Autókozmetika -->
            <a href="{{ url('/autokozmetika') }}" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                <span class="font-medium">Autókozmetika</span>
            </a>

            <!-- Alkatrész -->
            <a href="#" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                <span class="font-medium">Alkatrész</span>
            </a>

            <!-- Felni/Gumi -->
            <a href="https://felnitrader.hu/skulocarparts" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300" target="_blank">
                <span class="font-medium">Felni/Gumi</span>
            </a>

            <!-- Árajánlat -->
            <a href="{{ url('/arajanlat') }}" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
                <span class="font-medium">Árajánlat</span>
            </a>

            <!-- Kapcsolat -->
            <a href="{{ url('/kapcsolat') }}" class="text-dark-text hover:text-orange-custom px-3 py-2 transition-all duration-300">
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
                            <li><a href="{{ url('/szerviz') }}" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Műhely</a></li>
                            <li><a href="{{ url('/szakszerviz') }}" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Szakszervíz</a></li>
                            <li><a href="{{ url('/hanggenerator') }}" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Hanggenerátor</a></li>
                            <li><a href="{{ url('/referenciaink') }}" class="hover:text-orange-custom block py-2 pl-4 text-gray-300 transition-colors duration-300">Referenciáink</a></li>
                        </ul>
                    </li>

                    <!-- Autókozmetika -->
                    <li class="mobile-menu-item">
                        <a href="{{ url('/autokozmetika') }}" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                            <span class="font-medium">Autókozmetika</span>
                        </a>
                    </li>

                    <!-- Alkatrész -->
                    <li class="mobile-menu-item">
                        <a href="{{ url('/alkataresz') }}" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                            <span class="font-medium">Alkatrész</span>
                        </a>
                    </li>

                    <!-- Felni/Gumi -->
                    <li class="mobile-menu-item">
                        <a href="{{ url('https://felnitrader.hu/skulocarparts') }}" target="_blank" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                            <span class="font-medium">Felni/Gumi</span>
                        </a>
                    </li>

                    <!-- Árajánlat -->
                    <li class="mobile-menu-item">
                        <a href="{{ url('/arajanlat') }}" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
                            <span class="font-medium">Árajánlat</span>
                        </a>
                    </li>

                    <!-- Kapcsolat -->
                    <li class="mobile-menu-item">
                        <a href="{{ url('/kapcsolat') }}" class="ripple hover:text-orange-custom flex items-center justify-between py-3 text-white transition-all duration-300">
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
</div
