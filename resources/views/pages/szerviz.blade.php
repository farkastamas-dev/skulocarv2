<x-layouts.pages>
    <section class="page-hero flex items-center" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="container mx-auto px-4">
            <div class="relative z-10 flex h-full items-center justify-start">
                <div class="block h-full max-w-2xl items-center text-center">
                    <!-- Page Title -->
                    <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl">
                        Szervizszolgáltatás
                    </h1>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a href="/">Kezdőlap</a>
                        <span class="separator">/</span>
                        SKULOCAR Szervizszolgáltatás
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-dark-secondary py-10">
        <div class="container mx-auto px-4 py-4">

            <div class="grid grid-cols-1 items-center gap-12 lg:grid-cols-2">
                <div class="hidden lg:block">
                    <div class="relative overflow-hidden rounded-lg">
                        <img src="https://images.unsplash.com/photo-1560472354-b33ff0c44a43?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" alt="SkuloCar műhely" class="h-96 w-full object-cover">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 to-transparent"></div>
                    </div>
                </div>
                <div class="space-y-6">
                    <h2 class="text-3xl font-bold text-white md:text-4xl">
                        SKULOCAR Szervizszolgáltatás
                    </h2>
                    <div class="space-y-4 text-gray-300">
                        <p>
                            Cégünk tevékenységi köre a gépjármű alkatrész kereskedelem mellett teljes körű gépjármű szerviz szolgáltatásokkal is kiegészült.
                        <ul>
                            <li>GÉPJÁRMŰ JAVÍTÁS, SZERVIZELÉS</li>
                            <li>DIAGNOSZTIKAI VIZSGÁLATOK</li>
                            <li>FÉK ÉS FUTÓMŰ JAVÍTÁS</li>
                            <li>GUMISZERELÉS ÉS SZERVIZ</li>
                            <li>GÉPJÁRMŰ OKMÁNYIRODAI ÜGYINTÉZÉS</li>
                            <li>TELJES KÖRŰ SZOLGÁLTATÁS</li>

                        </ul>

                        Forduljon hozzánk bizalommal és jelentkezzen be elérhetőségünk bármelyikén.
                        </p>
                    </div>
                </div>

            </div>
        </div>
        <!-- Contact Section -->
        <section id="contact" class="bg-dark-bg py-16">
            <x-contact />
        </section>
    </section>
</x-layouts.pages>
