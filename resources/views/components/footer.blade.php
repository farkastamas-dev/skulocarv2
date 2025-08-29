<footer class="border-dark-border bg-dark-secondary mt-16 border-t py-12">
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
                    <a href="{{ url('/autokozmetika') }}" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                        Autókozmetika
                    </a>
                    <a href="{{ url('/szerviz') }}" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                        Szerviz
                    </a>
                    <a href="{{ url('/alkataresz') }}" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                        Alkatrészek
                    </a>
                    <a href="{{ url('/felnigumi') }}" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                        Felni/Gumi
                    </a>
                    <a href="{{ url('/arajanlat') }}" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
                        Árajánlat
                    </a>
                    <a href="{{ url('/kapcsolat') }}" class="hover:text-orange-custom text-gray-300 transition-colors duration-300">
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
