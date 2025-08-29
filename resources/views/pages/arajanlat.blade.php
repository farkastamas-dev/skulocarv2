<x-layouts.pages>
    <section class="page-hero flex items-center" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="container mx-auto px-4">
            <div class="relative z-10 flex h-full items-center justify-start">
                <div class="block h-full max-w-2xl items-center text-center">
                    <!-- Page Title -->
                    <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl">
                        Árajánlat
                    </h1>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a href="/">Kezdőlap</a>
                        <span class="separator">/</span>
                        Árajánlat
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
                <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Ingyenes Árajánlat Kérés</h2>
                <p class="mx-auto max-w-4xl text-lg leading-relaxed text-gray-300">
                    Kérjen ingyenes árajánlatot alkatrészekre vagy felnikre/gumikra! Szakértő csapatunk 24 órán belül válaszol
                    részletes árajánlattal. Töltse ki az alábbi űrlapot a megfelelő kategóriához, és mi felvesszük Önnel a kapcsolatot
                    a legjobb ajánlatunkkal.
                </p>
            </div>

            <!-- Service Selection Buttons -->
            <div class="mb-12 flex flex-col justify-center gap-4 sm:flex-row">
                <button id="partsBtn" onclick="showForm('parts')" class="service-btn active rounded-lg bg-[var(--orange-custom)] px-8 py-4 text-lg font-semibold text-white transition-all duration-300 hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom-focus)]">
                    <svg class="mr-2 inline h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                    Alkatrész
                </button>
                <button id="wheelsBtn" onclick="showForm('wheels')" class="service-btn rounded-lg bg-gray-600 px-8 py-4 text-lg font-semibold text-white transition-all duration-300 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500">
                    <svg class="mr-2 inline h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zM21 5a2 2 0 00-2-2h-4a2 2 0 00-2 2v12a4 4 0 004 4h4a2 2 0 002-2V5z"></path>
                    </svg>
                    Felni/Gumi
                </button>
            </div>

            <!-- Parts Form -->
            <div id="partsForm" class="form-section">
                <div class="mx-auto max-w-6xl">
                    <div class="mb-8 text-center">
                        <h3 class="mb-4 text-2xl font-bold text-white">Alkatrész Árajánlat Kérés</h3>
                        <p class="text-gray-300">
                            Töltse ki az alábbi űrlapot az alkatrész árajánlat kéréséhez. Minél részletesebb információt ad meg,
                            annál pontosabb árajánlatot tudunk adni.
                        </p>
                    </div>

                    <form class="bg-dark-secondary space-y-6 rounded-lg p-8 shadow-lg">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Név -->
                            <div>
                                <label for="partsName" class="mb-2 block text-sm font-medium text-white">Név *</label>
                                <input type="text" id="partsName" name="partsName" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="Teljes név">
                            </div>

                            <!-- Telefon -->
                            <div>
                                <label for="partsPhone" class="mb-2 block text-sm font-medium text-white">Telefon *</label>
                                <input type="tel" id="partsPhone" name="partsPhone" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="+36 20 123 4567">
                            </div>

                            <!-- E-mail -->
                            <div>
                                <label for="partsEmail" class="mb-2 block text-sm font-medium text-white">E-mail *</label>
                                <input type="email" id="partsEmail" name="partsEmail" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="pelda@email.com">
                            </div>

                            <!-- Gépjármű típusa -->
                            <div>
                                <label for="partsVehicleType" class="mb-2 block text-sm font-medium text-white">Gépjármű típusa *</label>
                                <input type="text" id="partsVehicleType" name="partsVehicleType" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="pl. BMW 320d, Audi A4">
                            </div>

                            <!-- Évjárat -->
                            <div>
                                <label for="partsYear" class="mb-2 block text-sm font-medium text-white">Évjárat *</label>
                                <input type="number" id="partsYear" name="partsYear" min="1900" max="2030" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="2020">
                            </div>

                            <!-- Motor (cm³) -->
                            <div>
                                <label for="partsEngine" class="mb-2 block text-sm font-medium text-white">Motor (cm³) *</label>
                                <input type="number" id="partsEngine" name="partsEngine" min="0" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="1995">
                            </div>

                            <!-- Teljesítmény -->
                            <div>
                                <label for="partsPower" class="mb-2 block text-sm font-medium text-white">Teljesítmény (LE) *</label>
                                <input type="number" id="partsPower" name="partsPower" min="0" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="150">
                            </div>

                            <!-- Motorkód -->
                            <div>
                                <label for="partsEngineCode" class="mb-2 block text-sm font-medium text-white">Motorkód</label>
                                <input type="text" id="partsEngineCode" name="partsEngineCode" class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="pl. N47D20">
                            </div>

                            <!-- Alvázszám -->
                            <div>
                                <label for="partsVIN" class="mb-2 block text-sm font-medium text-white">Alvázszám</label>
                                <input type="text" id="partsVIN" name="partsVIN" class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="WBA3B5C50ED123456">
                            </div>

                            <!-- Üzemanyag -->
                            <div>
                                <label for="partsFuel" class="mb-2 block text-sm font-medium text-white">Üzemanyag *</label>
                                <select id="partsFuel" name="partsFuel" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]">
                                    <option value="">Válasszon...</option>
                                    <option value="benzin">Benzin</option>
                                    <option value="diesel">Diesel</option>
                                    <option value="elektromos">Elektromos</option>
                                    <option value="hibrid">Hibrid</option>
                                    <option value="lpg">LPG</option>
                                </select>
                            </div>

                            <!-- Kivitel -->
                            <div>
                                <label for="partsBody" class="mb-2 block text-sm font-medium text-white">Kivitel *</label>
                                <select id="partsBody" name="partsBody" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]">
                                    <option value="">Válasszon...</option>
                                    <option value="sedan">Sedan</option>
                                    <option value="hatchback">Hatchback</option>
                                    <option value="kombi">Kombi</option>
                                    <option value="suv">SUV</option>
                                    <option value="cabrio">Cabrio</option>
                                    <option value="coupe">Coupe</option>
                                    <option value="van">Van</option>
                                </select>
                            </div>

                            <!-- Ajtók száma -->
                            <div>
                                <label for="partsDoors" class="mb-2 block text-sm font-medium text-white">Ajtók száma *</label>
                                <select id="partsDoors" name="partsDoors" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]">
                                    <option value="">Válasszon...</option>
                                    <option value="2">2 ajtós</option>
                                    <option value="3">3 ajtós</option>
                                    <option value="4">4 ajtós</option>
                                    <option value="5">5 ajtós</option>
                                </select>
                            </div>
                        </div>

                        <!-- Üzenet -->
                        <div>
                            <label for="partsMessage" class="mb-2 block text-sm font-medium text-white">Üzenet *</label>
                            <textarea id="partsMessage" name="partsMessage" rows="6" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="Írja le részletesen, milyen alkatrészre van szüksége, milyen problémát tapasztal, vagy milyen szolgáltatásra kíván árajánlatot kérni..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="rounded-lg bg-[var(--orange-custom)] px-8 py-4 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]">
                                Árajánlat Kérése
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Wheels/Tires Form -->
            <div id="wheelsForm" class="form-section hidden">
                <div class="mx-auto max-w-6xl">
                    <div class="mb-8 text-center">
                        <h3 class="mb-4 text-2xl font-bold text-white">Felni/Gumi Árajánlat Kérés</h3>
                        <p class="text-gray-300">
                            Kérjen árajánlatot felnikre vagy gumikra! Adja meg a felniméretet és egyéb preferenciáit,
                            és mi felvesszük Önnel a kapcsolatot a legjobb ajánlatunkkal.
                        </p>
                    </div>

                    <form class="bg-dark-secondary space-y-6 rounded-lg p-8 shadow-lg">
                        <div class="grid grid-cols-1 gap-6 md:grid-cols-2">
                            <!-- Név -->
                            <div>
                                <label for="wheelsName" class="mb-2 block text-sm font-medium text-white">Név *</label>
                                <input type="text" id="wheelsName" name="wheelsName" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="Teljes név">
                            </div>

                            <!-- Telefon -->
                            <div>
                                <label for="wheelsPhone" class="mb-2 block text-sm font-medium text-white">Telefon *</label>
                                <input type="tel" id="wheelsPhone" name="wheelsPhone" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="+36 20 123 4567">
                            </div>

                            <!-- E-mail -->
                            <div>
                                <label for="wheelsEmail" class="mb-2 block text-sm font-medium text-white">E-mail *</label>
                                <input type="email" id="wheelsEmail" name="wheelsEmail" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="pelda@email.com">
                            </div>

                            <!-- Felniméret -->
                            <div>
                                <label for="wheelsSize" class="mb-2 block text-sm font-medium text-white">Felniméret *</label>
                                <input type="text" id="wheelsSize" name="wheelsSize" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="pl. 17x7.5J, 18x8J">
                            </div>
                        </div>

                        <!-- Üzenet -->
                        <div>
                            <label for="wheelsMessage" class="mb-2 block text-sm font-medium text-white">Üzenet *</label>
                            <textarea id="wheelsMessage" name="wheelsMessage" rows="6" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="Írja le részletesen, milyen felnikre vagy gumikra van szüksége, milyen márkát preferál, milyen használati célra kívánja őket, stb..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="rounded-lg bg-[var(--orange-custom)] px-8 py-4 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]">
                                Árajánlat Kérése
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Additional Information -->
            <div class="mt-16 text-center">
                <h3 class="mb-6 text-2xl font-bold text-white">Miért Válasszon Minket?</h3>
                <div class="grid grid-cols-1 gap-8 md:grid-cols-3">
                    <div class="bg-dark-secondary rounded-lg p-6">
                        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="mb-2 text-lg font-bold text-white">Gyors Válasz</h4>
                        <p class="text-gray-300">24 órán belül válaszolunk részletes árajánlattal</p>
                    </div>

                    <div class="bg-dark-secondary rounded-lg p-6">
                        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                        </div>
                        <h4 class="mb-2 text-lg font-bold text-white">Garantált Minőség</h4>
                        <p class="text-gray-300">Csak minőségi alkatrészeket és felniket ajánlunk</p>
                    </div>

                    <div class="bg-dark-secondary rounded-lg p-6">
                        <div class="mx-auto mb-4 flex h-16 w-16 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
                            </svg>
                        </div>
                        <h4 class="mb-2 text-lg font-bold text-white">Kedvező Árak</h4>
                        <p class="text-gray-300">Versenyképes árakat kínálunk minden termékre</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function showForm(formType) {
            // Hide all forms
            document.querySelectorAll('.form-section').forEach(form => {
                form.classList.add('hidden');
            });

            // Reset all buttons
            document.querySelectorAll('.service-btn').forEach(btn => {
                btn.classList.remove('active', 'bg-[var(--orange-custom)]', 'hover:bg-[var(--orange-custom-hover)]', 'focus:ring-[var(--orange-custom-focus)]');
                btn.classList.add('bg-gray-600', 'hover:bg-gray-700', 'focus:ring-gray-500');
            });

            // Show selected form
            if (formType === 'parts') {
                document.getElementById('partsForm').classList.remove('hidden');
                document.getElementById('partsBtn').classList.remove('bg-gray-600', 'hover:bg-gray-700', 'focus:ring-gray-500');
                document.getElementById('partsBtn').classList.add('active', 'bg-[var(--orange-custom)]', 'hover:bg-[var(--orange-custom-hover)]', 'focus:ring-[var(--orange-custom-focus)]');
            } else if (formType === 'wheels') {
                document.getElementById('wheelsForm').classList.remove('hidden');
                document.getElementById('wheelsBtn').classList.remove('bg-gray-600', 'hover:bg-gray-700', 'focus:ring-gray-500');
                document.getElementById('wheelsBtn').classList.add('active', 'bg-[var(--orange-custom)]', 'hover:bg-[var(--orange-custom-hover)]', 'focus:ring-[var(--orange-custom-focus)]');
            }
        }
    </script>
</x-layouts.pages>
