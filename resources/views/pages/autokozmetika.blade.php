<x-layouts.pages>
    <section class="page-hero flex items-center" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="container mx-auto px-4">
            <div class="relative z-10 flex h-full items-center justify-start">
                <div class="block h-full max-w-2xl items-center text-center">
                    <!-- Page Title -->
                    <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl">
                        Autókozmetika
                    </h1>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a href="/">Kezdőlap</a>
                        <span class="separator">/</span>
                        Autókozmetika
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section -->
    <section class="bg-dark-bg py-16">
        <div class="container mx-auto px-4">
            <!-- Introduction -->
            <div class="mb-16 text-center">
                <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Professzionális Autókozmetika Szolgáltatások</h2>
                <p class="mx-auto max-w-4xl text-lg leading-relaxed text-gray-300">
                    Autójának megfelelő ápolása nem csak esztétikai kérdés, hanem befektetés is. Professzionális autókozmetikai szolgáltatásainkkal
                    nem csak a külső megjelenést javítjuk, hanem megvédjük autóját a környezeti hatásoktól és meghosszabbítjuk az élettartamát.
                    Különböző csomagjainkkal minden igénynek és költségvetésnek megfelelő megoldást kínálunk.
                </p>
            </div>

            <!-- Services Overview -->
            <div class="mb-16 grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                <!-- Service 1 -->
                <div class="bg-dark-secondary rounded-lg p-6 shadow-lg">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-white">Alapvető Mosás</h3>
                    <p class="text-gray-300">
                        Professzionális külső mosás, ablakok tisztítása, gumiabroncsok ápolása és belső alapvető tisztítás.
                    </p>
                </div>

                <!-- Service 2 -->
                <div class="bg-dark-secondary rounded-lg p-6 shadow-lg">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-white">Részletes Ápolás</h3>
                    <p class="text-gray-300">
                        Mélytisztítás, polírozás, viaszolás és belső részletes tisztítás minden felületen.
                    </p>
                </div>

                <!-- Service 3 -->
                <div class="bg-dark-secondary rounded-lg p-6 shadow-lg">
                    <div class="mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                        <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="mb-3 text-xl font-bold text-white">Prémium Csomag</h3>
                    <p class="text-gray-300">
                        Teljes körű autókozmetika, kerámiabevonat, belső sanitizálás és hosszú távú védelem.
                    </p>
                </div>
            </div>

            <!-- Detailed Services -->
            <div class="mb-16">
                <h3 class="mb-8 text-center text-2xl font-bold text-white">Szolgáltatásaink Részletesen</h3>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-2">
                    <!-- Left Column -->
                    <div class="space-y-6">
                        <div class="bg-dark-secondary rounded-lg p-6">
                            <h4 class="mb-3 text-lg font-bold text-[var(--orange-custom)]">Külső Ápolás</h4>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Professzionális mosás és szárítás
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Polírozás és karceltávolítás
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Viaszolás és védelem
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Kerámiabevonat alkalmazása
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Gumiabroncsok és felnik ápolása
                                </li>
                            </ul>
                        </div>

                        <div class="bg-dark-secondary rounded-lg p-6">
                            <h4 class="mb-3 text-lg font-bold text-[var(--orange-custom)]">Belső Ápolás</h4>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Ülés és szőnyeg mélytisztítás
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Műszerfal és konzolok tisztítása
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Üvegek és tükrök ápolása
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Klímarendszer sanitizálás
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Illatosítás és védelem
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Right Column -->
                    <div class="space-y-6">
                        <div class="bg-dark-secondary rounded-lg p-6">
                            <h4 class="mb-3 text-lg font-bold text-[var(--orange-custom)]">Speciális Szolgáltatások</h4>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Kerámiabevonat (9 hónapos védelem)
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Üvegek hidrofób bevonata
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Bőr ülés ápolás és védelem
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Motorháztető tisztítás
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Alváz tisztítás és védelem
                                </li>
                            </ul>
                        </div>

                        <div class="bg-dark-secondary rounded-lg p-6">
                            <h4 class="mb-3 text-lg font-bold text-[var(--orange-custom)]">Miért Válasszon Minket?</h4>
                            <ul class="space-y-2 text-gray-300">
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    10+ év szakmai tapasztalat
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Professzionális eszközök
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Garantált minőség
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Rugalmas időpontfoglalás
                                </li>
                                <li class="flex items-center">
                                    <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    Kedvező árak
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Price List -->
            <div class="mb-16">
                <h3 class="mb-8 text-center text-2xl font-bold text-white">Árlista</h3>

                <div class="grid grid-cols-1 gap-8 lg:grid-cols-3">
                    <!-- Basic Package -->
                    <div class="bg-dark-secondary rounded-lg p-8 shadow-lg">
                        <div class="mb-6 text-center">
                            <h4 class="mb-2 text-2xl font-bold text-white">Alapvető Csomag</h4>
                            <div class="text-3xl font-bold text-[var(--orange-custom)]">15.000 Ft</div>
                            <p class="text-sm text-gray-400">~2-3 óra</p>
                        </div>
                        <ul class="mb-8 space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Külső mosás és szárítás
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Ablakok tisztítása
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Gumiabroncsok ápolása
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Belső alapvető tisztítás
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Illatosítás
                            </li>
                        </ul>
                        <button class="w-full rounded-lg bg-[var(--orange-custom)] py-3 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                            Foglalás
                        </button>
                    </div>

                    <!-- Detailed Package -->
                    <div class="bg-dark-secondary rounded-lg border-2 border-[var(--orange-custom)] p-8 shadow-lg">
                        <div class="mb-6 text-center">
                            <h4 class="mb-2 text-2xl font-bold text-white">Részletes Csomag</h4>
                            <div class="text-3xl font-bold text-[var(--orange-custom)]">35.000 Ft</div>
                            <p class="text-sm text-gray-400">~4-5 óra</p>
                        </div>
                        <ul class="mb-8 space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Alapvető csomag minden eleme
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Polírozás és karceltávolítás
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Viaszolás és védelem
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Belső mélytisztítás
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Klímarendszer sanitizálás
                            </li>
                        </ul>
                        <button class="w-full rounded-lg bg-[var(--orange-custom)] py-3 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                            Foglalás
                        </button>
                    </div>

                    <!-- Premium Package -->
                    <div class="bg-dark-secondary rounded-lg p-8 shadow-lg">
                        <div class="mb-6 text-center">
                            <h4 class="mb-2 text-2xl font-bold text-white">Prémium Csomag</h4>
                            <div class="text-3xl font-bold text-[var(--orange-custom)]">75.000 Ft</div>
                            <p class="text-sm text-gray-400">~6-8 óra</p>
                        </div>
                        <ul class="mb-8 space-y-3 text-gray-300">
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Részletes csomag minden eleme
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Kerámiabevonat (9 hónap)
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Üvegek hidrofób bevonata
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Motorháztető tisztítás
                            </li>
                            <li class="flex items-center">
                                <svg class="mr-2 h-4 w-4 text-[var(--orange-custom)]" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                Alváz védelem
                            </li>
                        </ul>
                        <button class="w-full rounded-lg bg-[var(--orange-custom)] py-3 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                            Foglalás
                        </button>
                    </div>
                </div>
            </div>

            <!-- Additional Services -->
            <div class="mb-16">
                <h3 class="mb-8 text-center text-2xl font-bold text-white">Kiegészítő Szolgáltatások</h3>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-4">
                    <div class="bg-dark-secondary rounded-lg p-6 text-center">
                        <h4 class="mb-2 text-lg font-bold text-white">Kerámiabevonat</h4>
                        <p class="mb-3 text-2xl font-bold text-[var(--orange-custom)]">45.000 Ft</p>
                        <p class="text-sm text-gray-400">9 hónapos védelem</p>
                    </div>

                    <div class="bg-dark-secondary rounded-lg p-6 text-center">
                        <h4 class="mb-2 text-lg font-bold text-white">Belső Sanitizálás</h4>
                        <p class="mb-3 text-2xl font-bold text-[var(--orange-custom)]">8.000 Ft</p>
                        <p class="text-sm text-gray-400">Klíma és belső</p>
                    </div>

                    <div class="bg-dark-secondary rounded-lg p-6 text-center">
                        <h4 class="mb-2 text-lg font-bold text-white">Motorháztető</h4>
                        <p class="mb-3 text-2xl font-bold text-[var(--orange-custom)]">12.000 Ft</p>
                        <p class="text-sm text-gray-400">Tisztítás és védelem</p>
                    </div>

                    <div class="bg-dark-secondary rounded-lg p-6 text-center">
                        <h4 class="mb-2 text-lg font-bold text-white">Alváz Védelem</h4>
                        <p class="mb-3 text-2xl font-bold text-[var(--orange-custom)]">15.000 Ft</p>
                        <p class="text-sm text-gray-400">Tisztítás és bevonat</p>
                    </div>
                </div>
            </div>

            <!-- Call to Action -->
            <div class="text-center">
                <h3 class="mb-4 text-2xl font-bold text-white">Kész az Autókozmetikára?</h3>
                <p class="mb-6 text-lg text-gray-300">
                    Foglalja le időpontját még ma és adja meg autójának a megfelelő ápolást!
                </p>
                <div class="flex flex-col gap-4 sm:flex-row sm:justify-center">
                    <button class="rounded-lg bg-[var(--orange-custom)] px-8 py-4 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                        Foglalás Most
                    </button>
                    <button class="rounded-lg border-2 border-[var(--orange-custom)] px-8 py-4 font-semibold text-[var(--orange-custom)] transition-colors hover:bg-[var(--orange-custom)] hover:text-white">
                        Kapcsolatfelvétel
                    </button>
                </div>
            </div>
        </div>
    </section>
</x-layouts.pages>
