<x-layouts.pages>
    <section class="page-hero flex items-center" style="background: linear-gradient(135deg, rgba(0, 0, 0, 0.8) 0%, rgba(26, 26, 26, 0.8) 50%, rgba(10, 10, 10, 0.8) 100%), url('https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-4.0.3&auto=format&fit=crop&w=1920&q=80');">
        <div class="container mx-auto px-4">
            <div class="relative z-10 flex h-full items-center justify-start">
                <div class="block h-full max-w-2xl items-center text-center">
                    <!-- Page Title -->
                    <h1 class="mb-4 text-4xl font-bold text-white md:text-5xl">
                        Kapcsolat
                    </h1>

                    <!-- Breadcrumb -->
                    <nav class="breadcrumb">
                        <a href="/">Kezdőlap</a>
                        <span class="separator">/</span>
                        Kapcsolat
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
                <h2 class="mb-6 text-3xl font-bold text-white md:text-4xl">Lépjen Kapcsolatba Velünk</h2>
                <p class="mx-auto max-w-4xl text-lg leading-relaxed text-gray-300">
                    Kérdése van vagy segítségre van szüksége? Ne habozzon felvenni velünk a kapcsolatot!
                    Szakértő csapatunk mindig rendelkezésre áll, hogy segítsen Önnek. Töltse ki az alábbi
                    űrlapot, vagy használja a kapcsolati adatainkat.
                </p>
            </div>

            <!-- Contact Information and Form Grid -->
            <div class="grid grid-cols-1 gap-12 lg:grid-cols-2">
                <!-- Contact Information -->
                <div class="space-y-8">
                    <div>
                        <h3 class="mb-6 text-2xl font-bold text-white">Kapcsolati Adatok</h3>
                        <p class="mb-6 text-gray-300">
                            Szakértő csapatunk mindig rendelkezésre áll, hogy segítsen Önnek.
                            Vegye fel velünk a kapcsolatot bármelyik módszerrel.
                        </p>
                    </div>

                    <!-- Contact Details -->
                    <div class="space-y-6">
                        <!-- Phone -->
                        <div class="flex items-start space-x-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">Telefon</h4>
                                <p class="text-gray-300">+36 20 123 4567</p>
                                <p class="text-sm text-gray-400">Hétfő - Szombat: 8:00 - 18:00</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start space-x-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">E-mail</h4>
                                <p class="text-gray-300">info@skulocar.hu</p>
                                <p class="text-sm text-gray-400">24 órán belül válaszolunk</p>
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="flex items-start space-x-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">Cím</h4>
                                <p class="text-gray-300">1234 Budapest, Példa utca 123.</p>
                                <p class="text-sm text-gray-400">Ingyenes parkolás a helyszínen</p>
                            </div>
                        </div>

                        <!-- Opening Hours -->
                        <div class="flex items-start space-x-4">
                            <div class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)]">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold text-white">Nyitvatartás</h4>
                                <p class="text-gray-300">Hétfő - Péntek: 8:00 - 18:00</p>
                                <p class="text-gray-300">Szombat: 8:00 - 14:00</p>
                                <p class="text-sm text-gray-400">Vasárnap: Zárva</p>
                            </div>
                        </div>
                    </div>

                    <!-- Social Media -->
                    <div class="pt-6">
                        <h4 class="mb-4 text-lg font-semibold text-white">Kövessen Minket</h4>
                        <div class="flex space-x-4">
                            <a href="#" class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)] text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                                </svg>
                            </a>
                            <a href="#" class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)] text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M22.46 6c-.77.35-1.6.58-2.46.69.88-.53 1.56-1.37 1.88-2.38-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29 0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15 0 1.49.75 2.81 1.91 3.56-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.22 4.22 0 0 1-1.93.07 4.28 4.28 0 0 0 4 2.98 8.521 8.521 0 0 1-5.33 1.84c-.34 0-.68-.02-1.02-.06C3.44 20.29 5.7 21 8.12 21 16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56.84-.6 1.56-1.36 2.14-2.23z" />
                                </svg>
                            </a>
                            <a href="#" class="flex h-12 w-12 items-center justify-center rounded-full bg-[var(--orange-custom)] text-white transition-colors hover:bg-[var(--orange-custom-hover)]">
                                <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.017 0C5.396 0 .029 5.367.029 11.987c0 5.079 3.158 9.417 7.618 11.174-.105-.949-.199-2.403.041-3.439.219-.937 1.406-5.957 1.406-5.957s-.359-.72-.359-1.781c0-1.663.967-2.911 2.168-2.911 1.024 0 1.518.769 1.518 1.688 0 1.029-.653 2.567-.992 3.992-.285 1.193.6 2.165 1.775 2.165 2.128 0 3.768-2.245 3.768-5.487 0-2.861-2.063-4.869-5.008-4.869-3.41 0-5.409 2.562-5.409 5.199 0 1.033.394 2.143.889 2.741.099.12.112.225.085.345-.09.375-.293 1.199-.334 1.363-.053.225-.172.271-.402.165-1.495-.69-2.433-2.878-2.433-4.646 0-3.776 2.748-7.252 7.92-7.252 4.158 0 7.392 2.967 7.392 6.923 0 4.135-2.607 7.462-6.233 7.462-1.214 0-2.357-.629-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146C9.57 23.812 10.763 24.009 12.017 24.009c6.624 0 11.99-5.367 11.99-11.988C24.007 5.367 18.641.001 12.017.001z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="lg:pl-8">
                    <div class="mb-8">
                        <h3 class="mb-4 text-2xl font-bold text-white">Küldjön Üzenetet</h3>
                        <p class="text-gray-300">
                            Töltse ki az alábbi űrlapot, és mi hamarosan felvesszük Önnel a kapcsolatot.
                            Minden üzenetre 24 órán belül válaszolunk.
                        </p>
                    </div>

                    <form class="bg-dark-secondary space-y-6 rounded-lg p-8 shadow-lg">
                        <!-- Name -->
                        <div>
                            <label for="contactName" class="mb-2 block text-sm font-medium text-white">Név *</label>
                            <input type="text" id="contactName" name="contactName" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="Teljes név">
                        </div>

                        <!-- Phone -->
                        <div>
                            <label for="contactPhone" class="mb-2 block text-sm font-medium text-white">Telefon *</label>
                            <input type="tel" id="contactPhone" name="contactPhone" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="+36 20 123 4567">
                        </div>

                        <!-- Email -->
                        <div>
                            <label for="contactEmail" class="mb-2 block text-sm font-medium text-white">E-mail *</label>
                            <input type="email" id="contactEmail" name="contactEmail" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="pelda@email.com">
                        </div>

                        <!-- Message -->
                        <div>
                            <label for="contactMessage" class="mb-2 block text-sm font-medium text-white">Üzenet *</label>
                            <textarea id="contactMessage" name="contactMessage" rows="6" required class="w-full rounded-lg border border-gray-600 bg-gray-700/30 px-4 py-3 text-white placeholder-gray-400 focus:border-[var(--orange-custom)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]" placeholder="Írja le üzenetét részletesen..."></textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <button type="submit" class="w-full rounded-lg bg-[var(--orange-custom)] px-6 py-4 font-semibold text-white transition-colors hover:bg-[var(--orange-custom-hover)] focus:outline-none focus:ring-2 focus:ring-[var(--orange-custom)]">
                                Üzenet Küldése
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Map Section -->
            <div class="mt-16">
                <h3 class="mb-8 text-center text-2xl font-bold text-white">Megtalál Minket</h3>
                <div class="bg-dark-secondary rounded-lg p-8 shadow-lg">
                    <div class="aspect-w-16 aspect-h-9 h-96 w-full rounded-lg bg-gray-700">
                        <!-- Map placeholder - replace with actual map embed -->
                        <div class="flex h-full w-full items-center justify-center">
                            <div class="text-center">
                                <svg class="mx-auto mb-4 h-16 w-16 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                                <p class="text-gray-400">Térkép betöltése...</p>
                                <p class="text-sm text-gray-500">1234 Budapest, Példa utca 123.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- FAQ Section -->
            <div class="mt-16">
                <h3 class="mb-8 text-center text-2xl font-bold text-white">Gyakran Ismételt Kérdések</h3>
                <div class="mx-auto max-w-4xl space-y-4">
                    <!-- FAQ Item 1 -->
                    <div class="faq-item bg-dark-secondary rounded-lg">
                        <button class="faq-question flex w-full items-center justify-between p-6 text-left transition-all duration-300 hover:bg-gray-700" onclick="toggleFAQ(this)">
                            <h4 class="text-lg font-semibold text-white">Milyen szolgáltatásokat nyújtotok?</h4>
                            <svg class="faq-icon h-6 w-6 text-[var(--orange-custom)] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-6">
                                <p class="text-gray-300">
                                    Autószervíz, autókozmetika, alkatrész eladás, felni és gumi szolgáltatások,
                                    diagnosztika és sok más. Teljes körű autószervíz szolgáltatást nyújtunk
                                    minden márkára és típusra.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 2 -->
                    <div class="faq-item bg-dark-secondary rounded-lg">
                        <button class="faq-question flex w-full items-center justify-between p-6 text-left transition-all duration-300 hover:bg-gray-700" onclick="toggleFAQ(this)">
                            <h4 class="text-lg font-semibold text-white">Mennyi idő alatt válaszoltok?</h4>
                            <svg class="faq-icon h-6 w-6 text-[var(--orange-custom)] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-6">
                                <p class="pt-6 text-gray-300">
                                    Általában 24 órán belül válaszolunk minden üzenetre. Sürgős esetekben
                                    telefonon is elérhetőek vagyunk. Hétköznapokon 8:00-18:00 között
                                    azonnal válaszolunk.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 3 -->
                    <div class="faq-item bg-dark-secondary rounded-lg">
                        <button class="faq-question flex w-full items-center justify-between p-6 text-left transition-all duration-300 hover:bg-gray-700" onclick="toggleFAQ(this)">
                            <h4 class="text-lg font-semibold text-white">Van ingyenes parkolás?</h4>
                            <svg class="faq-icon h-6 w-6 text-[var(--orange-custom)] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-6">
                                <p class="text-gray-300">
                                    Igen, ingyenes parkolási lehetőség áll rendelkezésre a helyszínen
                                    minden ügyfelünk számára. Biztonságos, fedett parkolóhelyek
                                    várják autóját.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 4 -->
                    <div class="faq-item bg-dark-secondary rounded-lg">
                        <button class="faq-question flex w-full items-center justify-between p-6 text-left transition-all duration-300 hover:bg-gray-700" onclick="toggleFAQ(this)">
                            <h4 class="text-lg font-semibold text-white">Milyen fizetési módokat fogadtok el?</h4>
                            <svg class="faq-icon h-6 w-6 text-[var(--orange-custom)] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-6">
                                <p class="text-gray-300">
                                    Készpénz, bankkártya, banki átutalás és részletfizetési lehetőség
                                    is rendelkezésre áll. Minden nagyobb bankkártyát elfogadunk,
                                    és részletfizetés esetén kedvező feltételeket kínálunk.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 5 -->
                    <div class="faq-item bg-dark-secondary rounded-lg">
                        <button class="faq-question flex w-full items-center justify-between p-6 text-left transition-all duration-300 hover:bg-gray-700" onclick="toggleFAQ(this)">
                            <h4 class="text-lg font-semibold text-white">Milyen garanciát adtok a munkára?</h4>
                            <svg class="faq-icon h-6 w-6 text-[var(--orange-custom)] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-6">
                                <p class="text-gray-300">
                                    Minden munkánkra 2 év garanciát adunk. Az alkatrészekre a gyártói
                                    garancia mellett további 1 év garanciát biztosítunk.
                                    Részletes garancia feltételeket mindig írásban is megadunk.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Item 6 -->
                    <div class="faq-item bg-dark-secondary rounded-lg">
                        <button class="faq-question flex w-full items-center justify-between p-6 text-left transition-all duration-300 hover:bg-gray-700" onclick="toggleFAQ(this)">
                            <h4 class="text-lg font-semibold text-white">Időpontfoglalásra van szükség?</h4>
                            <svg class="faq-icon h-6 w-6 text-[var(--orange-custom)] transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                        <div class="faq-answer max-h-0 overflow-hidden transition-all duration-300">
                            <div class="px-6 pb-6">
                                <p class="text-gray-300">
                                    Nagyobb munkákhoz javasolt az időpontfoglalás, de sürgős
                                    javítások esetén igyekszünk azonnal fogadni. Telefonon vagy
                                    személyesen is foglalhat időpontot.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function toggleFAQ(button) {
            const faqItem = button.closest('.faq-item');
            const answer = faqItem.querySelector('.faq-answer');
            const icon = faqItem.querySelector('.faq-icon');

            // Close all other FAQ items
            document.querySelectorAll('.faq-item').forEach(item => {
                if (item !== faqItem) {
                    const otherAnswer = item.querySelector('.faq-answer');
                    const otherIcon = item.querySelector('.faq-icon');
                    otherAnswer.style.maxHeight = '0px';
                    otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current FAQ item
            if (answer.style.maxHeight === '0px' || answer.style.maxHeight === '') {
                answer.style.maxHeight = answer.scrollHeight + 'px';
                icon.style.transform = 'rotate(180deg)';
            } else {
                answer.style.maxHeight = '0px';
                icon.style.transform = 'rotate(0deg)';
            }
        }
    </script>
</x-layouts.pages>
