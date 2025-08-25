<header class="sticky top-0 z-50 flex h-[100px] bg-black/80 backdrop-blur-xl">
    <div class="container mx-auto flex w-full items-center justify-between px-4">
        <div class="text-white">Logo</div>
        <nav class="hidden md:block">
            <ul class="font-heading flex space-x-4 text-xs font-semibold uppercase">
                <li><a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2">Kezdőlap</a></li>
                <li class="group relative">
                    <a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2" id="szerviz-link">Szervíz</a>
                    <ul class="submenu pointer-events-none absolute left-0 z-50 mt-2 min-w-[120px] translate-y-2 bg-black/90 py-2 opacity-0 shadow-lg transition-all duration-300 ease-out group-hover:pointer-events-auto group-hover:translate-y-0 group-hover:opacity-100" id="szerviz-submenu">
                        <li class="border-l-2 border-transparent hover:border-[#ff9000]"><a href="#" class="block px-6 py-4 text-white hover:bg-stone-50/10 hover:text-[#ff9000]">Műhely</a></li>
                        <li class="border-l-2 border-transparent hover:border-[#ff9000]"><a href="#" class="block px-6 py-4 text-white hover:bg-stone-50/10 hover:text-[#ff9000]">Szakszervíz</a></li>
                        <li class="border-l-2 border-transparent hover:border-[#ff9000]"><a href="#" class="block px-6 py-4 text-white hover:bg-stone-50/10 hover:text-[#ff9000]">Hanggenerátor</a></li>
                        <li class="border-l-2 border-transparent hover:border-[#ff9000]"><a href="#" class="block px-6 py-4 text-white hover:bg-stone-50/10 hover:text-[#ff9000]">Referenciáink</a></li>
                    </ul>
                </li>
                <li><a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2">Autókozmetika</a></li>
                <li><a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2">Alkatrész</a></li>
                <li><a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2">Felni/Gumi</a></li>
                <li><a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2">Árajánlat</a></li>
                <li><a href="#" class="px-1 py-3 text-white hover:text-[#ff9000] md:px-2">Kapcsolat</a></li>
            </ul>
        </nav>
        <div class="md:hidden">
            <button class="text-white focus:outline-none" id="mobile-menu-button">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>
    </div>

    <div id="mobile-menu-overlay" class="pointer-events-none fixed inset-0 z-40 bg-black/50 opacity-0 transition-opacity duration-300 md:hidden"></div>

    <div id="mobile-menu" class="z-200 fixed relative inset-0 top-0 min-h-screen w-full -translate-x-full bg-black/95 backdrop-blur-xl transition-transform duration-300 ease-in-out md:hidden">
        <div class="flex flex-col">
            <div class="flex items-center justify-between border-b border-white/20 p-6">
                <div class="text-lg font-semibold text-white">Menü</div>
                <button id="mobile-menu-close" class="text-white hover:text-[#ff9000] focus:outline-none">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>

            <nav class="flex-1 overflow-y-auto p-6">
                <ul class="font-heading space-y-4 text-sm font-medium">
                    <li><a href="#" class="block py-2 text-white transition-colors hover:text-[#ff9000]">Kezdőlap</a></li>

                    <li class="mobile-menu-item">
                        <button id="mobile-szerviz-toggle" class="flex w-full items-center justify-between py-2 text-white transition-colors hover:text-[#ff9000]">
                            <span>Szervíz</span>
                            <svg class="h-4 w-4 transform transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <ul id="mobile-szerviz-submenu" class="mt-2 hidden space-y-2 border-l-2 border-[#ff9000]/30 pl-4">
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Műhely</a></li>
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Szakszervíz</a></li>
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Hanggenerátor</a></li>
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Referenciáink</a></li>
                        </ul>
                    </li>

                    <li><a href="#" class="block py-2 text-white transition-colors hover:text-[#ff9000]">Autókozmetika</a></li>
                    <li><a href="#" class="block py-2 text-white transition-colors hover:text-[#ff9000]">Alkatrész</a></li>
                    <li><a href="#" class="block py-2 text-white transition-colors hover:text-[#ff9000]">Felni/Gumi</a></li>
                    <li><a href="#" class="block py-2 text-white transition-colors hover:text-[#ff9000]">Árajánlat</a></li>
                    <li><a href="#" class="block py-2 text-white transition-colors hover:text-[#ff9000]">Kapcsolat</a></li>
                </ul>
            </nav>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const szervizLink = document.getElementById('szerviz-link');
            const submenu = document.getElementById('szerviz-submenu');

            function isMobile() {
                return window.innerWidth < 768;
            }

            function showSubmenuMobile(e) {
                if (isMobile()) {
                    e.preventDefault();
                    submenu.classList.toggle('submenu-open');
                }
            }

            szervizLink.addEventListener('click', showSubmenuMobile);

            document.addEventListener('click', function(e) {
                if (isMobile()) {
                    if (!szervizLink.contains(e.target) && !submenu.contains(e.target)) {
                        submenu.classList.remove('submenu-open');
                    }
                }
            });

            window.addEventListener('resize', function() {
                if (!isMobile()) {
                    submenu.classList.remove('submenu-open');
                }
            });

            const mobileMenuButton = document.getElementById('mobile-menu-button');
            const mobileMenuClose = document.getElementById('mobile-menu-close');
            const mobileMenu = document.getElementById('mobile-menu');
            const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
            const mobileSzervizToggle = document.getElementById('mobile-szerviz-toggle');
            const mobileSzervizSubmenu = document.getElementById('mobile-szerviz-submenu');

            function openMobileMenu() {
                mobileMenu.classList.remove('-translate-x-full');
                mobileMenuOverlay.classList.remove('opacity-0', 'pointer-events-none');
                document.body.style.overflow = 'hidden';
                document.body.style.position = 'fixed';
                document.body.style.width = '100%';
            }

            function closeMobileMenu() {
                mobileMenu.classList.add('-translate-x-full');
                mobileMenuOverlay.classList.add('opacity-0', 'pointer-events-none');
                document.body.style.overflow = '';
                document.body.style.position = '';
                document.body.style.width = '';
                mobileSzervizSubmenu.classList.add('hidden');
                mobileSzervizToggle.querySelector('svg').classList.remove('rotate-180');
            }

            mobileMenuButton.addEventListener('click', openMobileMenu);
            mobileMenuClose.addEventListener('click', closeMobileMenu);
            mobileMenuOverlay.addEventListener('click', closeMobileMenu);

            mobileSzervizToggle.addEventListener('click', function() {
                const isOpen = !mobileSzervizSubmenu.classList.contains('hidden');
                if (isOpen) {
                    mobileSzervizSubmenu.classList.add('hidden');
                    mobileSzervizToggle.querySelector('svg').classList.remove('rotate-180');
                } else {
                    mobileSzervizSubmenu.classList.remove('hidden');
                    mobileSzervizToggle.querySelector('svg').classList.add('rotate-180');
                }
            });

            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape') {
                    closeMobileMenu();
                }
            });
        });
    </script>

    <style>
        @media (min-width: 768px) {
            #szerviz-submenu {
                opacity: 0;
                transform: translateY(8px);
                pointer-events: none;
                transition: opacity 0.3s, transform 0.3s;
                display: block;
            }

            .group:hover #szerviz-submenu,
            .group:focus-within #szerviz-submenu,
            #szerviz-submenu:hover {
                opacity: 1;
                transform: translateY(0);
                pointer-events: auto;
            }
        }

        @media (max-width: 767px) {
            #szerviz-submenu {
                opacity: 0;
                transform: translateY(8px);
                pointer-events: none;
                transition: opacity 0.3s, transform 0.3s;
                display: block;
            }

            #szerviz-submenu.submenu-open {
                opacity: 1;
                transform: translateY(0);
                pointer-events: auto;
            }
        }
    </style>
</header>
