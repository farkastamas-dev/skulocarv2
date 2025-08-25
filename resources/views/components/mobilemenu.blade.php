<!-- Mobile Header -->
<header class="sticky top-0 z-50 flex h-[100px] bg-black/80 backdrop-blur-xl md:hidden">
    <div class="container mx-auto flex w-full items-center justify-between px-4">
        <div class="text-white">Logo</div>
        <button class="text-white focus:outline-none" id="mobile-menu-button">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>
    </div>
</header>

<!-- Mobile Menu Overlay -->
<div id="mobile-menu-overlay" class="pointer-events-none fixed inset-0 z-40 bg-black/50 opacity-0 transition-opacity duration-300 md:hidden"></div>

<!-- Mobile Menu Full Screen -->
<div id="mobile-menu" class="fixed inset-0 z-50 -translate-y-full bg-black/95 backdrop-blur-xl transition-transform duration-300 ease-in-out md:hidden">
    <div class="flex h-full flex-col">
        <!-- Header -->
        <div class="flex items-center justify-between border-b border-white/20 p-6">
            <div class="text-lg font-semibold text-white">Menü</div>
            <button id="mobile-menu-close" class="text-white hover:text-[#ff9000] focus:outline-none">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>

        <!-- Menu Items -->
        <nav class="flex-1 overflow-y-auto p-6">
            <ul class="font-heading space-y-4 text-sm font-medium">
                <li><a href="#" class="block py-3 text-white transition-colors hover:text-[#ff9000]">Kezdőlap</a></li>

                <!-- Szervíz with submenu -->
                <li>
                    <button id="mobile-szerviz-toggle" class="flex w-full items-center justify-between py-3 text-white transition-colors hover:text-[#ff9000]">
                        <span>Szervíz</span>
                        <svg class="h-4 w-4 transform transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div id="mobile-szerviz-submenu" class="max-h-0 overflow-hidden transition-all duration-300 ease-in-out">
                        <ul class="space-y-2 border-l-2 border-[#ff9000]/30 pl-4 pt-2">
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Műhely</a></li>
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Szakszervíz</a></li>
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Hanggenerátor</a></li>
                            <li><a href="#" class="block py-2 text-white/80 transition-colors hover:text-[#ff9000]">Referenciáink</a></li>
                        </ul>
                    </div>
                </li>

                <li><a href="#" class="block py-3 text-white transition-colors hover:text-[#ff9000]">Autókozmetika</a></li>
                <li><a href="#" class="block py-3 text-white transition-colors hover:text-[#ff9000]">Alkatrész</a></li>
                <li><a href="#" class="block py-3 text-white transition-colors hover:text-[#ff9000]">Felni/Gumi</a></li>
                <li><a href="#" class="block py-3 text-white transition-colors hover:text-[#ff9000]">Árajánlat</a></li>
                <li><a href="#" class="block py-3 text-white transition-colors hover:text-[#ff9000]">Kapcsolat</a></li>
            </ul>
        </nav>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mobile menu functionality
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenuClose = document.getElementById('mobile-menu-close');
        const mobileMenu = document.getElementById('mobile-menu');
        const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
        const mobileSzervizToggle = document.getElementById('mobile-szerviz-toggle');
        const mobileSzervizSubmenu = document.getElementById('mobile-szerviz-submenu');

        function openMobileMenu() {
            mobileMenu.classList.remove('-translate-y-full');
            mobileMenuOverlay.classList.remove('opacity-0', 'pointer-events-none');
            document.body.style.overflow = 'hidden';
            document.body.style.position = 'fixed';
            document.body.style.width = '100%';
        }

        function closeMobileMenu() {
            mobileMenu.classList.add('-translate-y-full');
            mobileMenuOverlay.classList.add('opacity-0', 'pointer-events-none');
            document.body.style.overflow = '';
            document.body.style.position = '';
            document.body.style.width = '';
            // Close submenu when closing mobile menu
            mobileSzervizSubmenu.style.maxHeight = '0px';
            mobileSzervizToggle.querySelector('svg').classList.remove('rotate-180');
        }

        mobileMenuButton.addEventListener('click', openMobileMenu);
        mobileMenuClose.addEventListener('click', closeMobileMenu);
        mobileMenuOverlay.addEventListener('click', closeMobileMenu);

        // Mobile submenu toggle with smooth animation
        mobileSzervizToggle.addEventListener('click', function() {
            const isOpen = mobileSzervizSubmenu.style.maxHeight !== '0px' && mobileSzervizSubmenu.style.maxHeight !== '';

            if (isOpen) {
                mobileSzervizSubmenu.style.maxHeight = '0px';
                mobileSzervizToggle.querySelector('svg').classList.remove('rotate-180');
            } else {
                mobileSzervizSubmenu.style.maxHeight = mobileSzervizSubmenu.scrollHeight + 'px';
                mobileSzervizToggle.querySelector('svg').classList.add('rotate-180');
            }
        });

        // Close mobile menu on escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeMobileMenu();
            }
        });
    });
</script>
