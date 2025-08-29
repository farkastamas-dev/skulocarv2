<x-layouts.welcome>
    <!-- Hero Slider Section -->
    <div class="hero-slider-container relative">
        <!-- Slider 1 - Main Hero -->
        <section class="hero-slider flex items-center" id="slider-1">
            <div class="absolute inset-0">
                <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80" alt="SkuloCar Autószerviz" class="h-full w-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
            </div>
            <div class="container relative z-10 mx-auto px-4">
                <div class="flex flex-col items-center justify-center">
                    <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                        <!-- Left side - Text content -->
                        <div class="hero-content hero-text rounded-lg bg-black/70 p-6">
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
                    <div class="hero-content hero-text rounded-lg bg-black/70 p-6">
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
                    <div class="hero-content hero-text rounded-lg bg-black/70 p-6">
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
                    <div class="hero-content hero-text rounded-lg bg-black/70 p-6">
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
                    <div class="hero-content hero-text rounded-lg bg-black/70 p-6">
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

    <x-szolgaltatasaink />

    <x-partners />

    <x-contact />
</x-layouts.welcome>
