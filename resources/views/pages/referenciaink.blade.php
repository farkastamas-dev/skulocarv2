<x-layouts.pages>
    <section class="page-hero flex items-center" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="container mx-auto px-4">
            <div class="relative z-10 flex h-full items-center justify-start">
                <div class="block h-full max-w-2xl items-center text-center">
                    <!-- Page Title -->
                    <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl">
                        Referenciáink képekben
                    </h1>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a href="/">Kezdőlap</a>
                        <span class="separator">/</span>
                        Referenciáink képekben
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark-bg py-10">
        <div class="container mx-auto px-4">
            <h1 class="py-5 text-center text-4xl font-bold text-white">Referenciáink képekben</h1>

            {{-- <!-- Filter Buttons --> --}}
            <div class="mb-8 flex flex-wrap justify-center gap-4">
                <button onclick="filterImages('all')" class="filter-btn active rounded-lg bg-[var(--orange-custom)] px-6 py-3 text-white transition-all duration-300 hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom-focus)]">
                    Összes
                </button>
                <button onclick="filterImages('szerviz')" class="filter-btn rounded-lg bg-[var(--orange-custom)] px-6 py-3 text-white transition-all duration-300 hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom-focus)]">
                    Szervíz
                </button>
                <button onclick="filterImages('autokozmetika')" class="filter-btn rounded-lg bg-[var(--orange-custom)] px-6 py-3 text-white transition-all duration-300 hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom-focus)]">
                    Autókozmetika
                </button>
            </div>

            <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Car Image 1 - Szervíz -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="szerviz" onclick="openLightbox('https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 1" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 2 - Autókozmetika -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="autokozmetika" onclick="openLightbox('https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 2" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 3 - Szervíz -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="szerviz" onclick="openLightbox('https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1580273916550-e323be2ae537?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 3" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 4 - Autókozmetika -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="autokozmetika" onclick="openLightbox('https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1503376780353-7e6692767b70?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 4" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 5 - Szervíz -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="szerviz" onclick="openLightbox('https://images.unsplash.com/photo-1563720223185-11003d516935?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1563720223185-11003d516935?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 5" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 6 - Autókozmetika -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="autokozmetika" onclick="openLightbox('https://images.unsplash.com/photo-1617814076367-b759c7d7e738?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1617814076367-b759c7d7e738?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 6" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 7 - Szervíz -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="szerviz" onclick="openLightbox('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 7" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 8 - Autókozmetika -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="autokozmetika" onclick="openLightbox('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 8" class="h-64 w-full object-cover">
                </div>

                <!-- Car Image 9 - Szervíz -->
                <div class="image-item transform cursor-pointer overflow-hidden rounded-lg shadow-lg transition-all duration-300 hover:scale-105" data-category="szerviz" onclick="openLightbox('https://images.unsplash.com/photo-1614200187524-dc4b892acf16?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80')">
                    <img src="https://images.unsplash.com/photo-1614200187524-dc4b892acf16?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="Autó referencia 9" class="h-64 w-full object-cover">
                </div>
            </div>
        </div>

        <!-- Lightbox Modal -->
        <div id="lightbox" class="fixed inset-0 z-50 flex hidden items-center justify-center bg-black bg-opacity-0 transition-all duration-300 ease-in-out">
            <div class="relative max-h-[90vh] max-w-[90vw] scale-75 transform opacity-0 transition-all duration-300 ease-in-out">
                <img id="lightbox-img" src="" alt="Nagyított kép" class="max-h-full max-w-full object-contain">
                <button onclick="closeLightbox()" class="absolute -right-2 -top-2 flex h-10 w-10 items-center justify-center rounded-full bg-black bg-opacity-50 text-4xl text-white transition-colors duration-200 hover:text-gray-300">&times;</button>
            </div>
        </div>

        <!-- Contact Section -->
        <section id="contact" class="bg-dark-secondary my-16 py-16">
            <x-contact />
        </section>
    </section>

</x-layouts.pages>
