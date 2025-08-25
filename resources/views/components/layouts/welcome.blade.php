<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <x-head />

</head>

<body class="bg-skulo-black relative min-h-screen scroll-smooth text-white">
    <div id="app" class="relative">
        <x-navigation />
        <x-mobilemenu />

        <section class="hero-slider relative h-[calc(100vh-100px)] overflow-hidden">
            <!-- Slide Container -->
            <div class="slide-container relative h-full w-full">

                <!-- Slide 1 -->
                <div class="slide absolute inset-0 h-full w-full transition-opacity duration-700 ease-in-out" data-slide="0">
                    <img src="{{ Vite::asset('resources/images/img01.jpg') }}" alt="Hero Image 1" class="h-full w-full object-cover object-center opacity-50">

                    <div class="hero-content absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
                        <div class="container mx-auto px-4 text-left">
                            <h1 class="text-4xl font-bold">Skulo</h1>
                            <p class="text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse nulla mollitia, dolore explicabo earum commodi excepturi fugiat inventore!
                            </p>
                            <a href="#" class="btn-primary">Tovább</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-700 ease-in-out" data-slide="1">
                    <img src="{{ Vite::asset('resources/images/img02.jpg') }}" alt="Hero Image 2" class="h-full w-full object-cover object-center opacity-50">

                    <div class="hero-content absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
                        <div class="container mx-auto px-4 text-left">
                            <h1 class="text-4xl font-bold">Autószervíz</h1>
                            <p class="text-lg">
                                Professzionális autószervíz szolgáltatások a legmagasabb minőségben. Tapasztalt szakembereink gondoskodnak autód tökéletes állapotáról.
                            </p>
                            <a href="#" class="btn-primary">Szolgáltatásaink</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-700 ease-in-out" data-slide="2">
                    <img src="{{ Vite::asset('resources/images/img03.jpg') }}" alt="Hero Image 3" class="h-full w-full object-cover object-center opacity-50">

                    <div class="hero-content absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
                        <div class="container mx-auto px-4 text-left">
                            <h1 class="text-4xl font-bold">Alkatrészek</h1>
                            <p class="text-lg">
                                Széles választék autóalkatrészekből és gumiabroncsokból. Minőségi termékek kedvező áron, gyors szállítással.
                            </p>
                            <a href="#" class="btn-primary">Termékek</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 4 -->
                <div class="slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-700 ease-in-out" data-slide="3">
                    <img src="{{ Vite::asset('resources/images/img04.jpg') }}" alt="Hero Image 4" class="h-full w-full object-cover object-center opacity-50">

                    <div class="hero-content absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
                        <div class="container mx-auto px-4 text-left">
                            <h1 class="text-4xl font-bold">Futómű</h1>
                            <p class="text-lg">
                                Modern gépekkel végzett futómű beállítás és javítás, hogy autód mindig biztonságos legyen az utakon.
                            </p>
                            <a href="#" class="btn-primary">Tudj meg többet</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation Arrows -->
            <button class="slider-nav prev absolute left-4 top-1/2 z-50 -translate-y-1/2 rounded-full bg-black/50 p-3 text-white transition-all duration-300 hover:bg-black/70 focus:outline-none" id="prev-slide">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>

            <button class="slider-nav next absolute right-4 top-1/2 z-50 -translate-y-1/2 rounded-full bg-black/50 p-3 text-white transition-all duration-300 hover:bg-black/70 focus:outline-none" id="next-slide">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>

            <!-- Slide Indicators -->
            <div class="slide-indicators absolute bottom-6 left-1/2 z-50 flex -translate-x-1/2 space-x-2">
                <button class="indicator h-3 w-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-white/70 focus:outline-none active:bg-white" data-slide="0"></button>
                <button class="indicator h-3 w-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-white/70 focus:outline-none" data-slide="1"></button>
                <button class="indicator h-3 w-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-white/70 focus:outline-none" data-slide="2"></button>
                <button class="indicator h-3 w-3 rounded-full bg-white/50 transition-all duration-300 hover:bg-white/70 focus:outline-none" data-slide="3"></button>
            </div>
        </section>

        <!-- Scroll to Top Button -->
        <button id="scroll-to-top" class="pointer-events-none fixed bottom-6 right-6 z-50 rounded-full bg-[#ff9000] p-3 text-white opacity-0 shadow-lg transition-all duration-300 hover:bg-[#ff9000]/80 focus:outline-none" style="transform: translateY(20px);">
            <div class="border-container relative">
                <div class="border-ring absolute inset-0 rounded-full border-2 border-transparent border-t-white/60 transition-all duration-300"></div>
                <svg class="relative z-10 h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
                </svg>
            </div>
        </button>

    </div>

    {{ $slot }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slides = document.querySelectorAll('.slide');
            const indicators = document.querySelectorAll('.indicator');
            const prevBtn = document.getElementById('prev-slide');
            const nextBtn = document.getElementById('next-slide');

            let currentSlide = 0;
            let slideInterval;

            // Initialize slider
            function initSlider() {
                showSlide(currentSlide);
                startAutoSlide();
            }

            // Show specific slide
            function showSlide(index) {
                // Hide all slides
                slides.forEach(slide => {
                    slide.style.opacity = '0';
                });

                // Remove active class from all indicators
                indicators.forEach(indicator => {
                    indicator.classList.remove('active');
                });

                // Show current slide
                slides[index].style.opacity = '1';
                indicators[index].classList.add('active');

                currentSlide = index;
            }

            // Next slide
            function nextSlide() {
                currentSlide = (currentSlide + 1) % slides.length;
                showSlide(currentSlide);
            }

            // Previous slide
            function prevSlide() {
                currentSlide = (currentSlide - 1 + slides.length) % slides.length;
                showSlide(currentSlide);
            }

            // Auto slide
            function startAutoSlide() {
                slideInterval = setInterval(nextSlide, 5000); // Change slide every 5 seconds
            }

            function stopAutoSlide() {
                clearInterval(slideInterval);
            }

            // Event listeners
            prevBtn.addEventListener('click', function() {
                prevSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            nextBtn.addEventListener('click', function() {
                nextSlide();
                stopAutoSlide();
                startAutoSlide();
            });

            // Indicator clicks
            indicators.forEach((indicator, index) => {
                indicator.addEventListener('click', function() {
                    showSlide(index);
                    stopAutoSlide();
                    startAutoSlide();
                });
            });

            // Pause auto-slide on hover
            const slider = document.querySelector('.hero-slider');
            slider.addEventListener('mouseenter', stopAutoSlide);
            slider.addEventListener('mouseleave', startAutoSlide);

            // Keyboard navigation
            document.addEventListener('keydown', function(e) {
                if (e.key === 'ArrowLeft') {
                    prevSlide();
                    stopAutoSlide();
                    startAutoSlide();
                } else if (e.key === 'ArrowRight') {
                    nextSlide();
                    stopAutoSlide();
                    startAutoSlide();
                }
            });

            // Initialize the slider
            initSlider();

            // Scroll to top functionality
            const scrollToTopBtn = document.getElementById('scroll-to-top');
            let scrollProgress = 0;

            // Update scroll progress and button appearance
            function updateScrollProgress() {
                const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                scrollProgress = scrollTop / docHeight;

                // Show/hide button based on scroll position
                if (scrollTop > 300) {
                    scrollToTopBtn.style.opacity = '1';
                    scrollToTopBtn.style.pointerEvents = 'auto';
                    scrollToTopBtn.style.transform = 'translateY(0)';
                } else {
                    scrollToTopBtn.style.opacity = '0';
                    scrollToTopBtn.style.pointerEvents = 'none';
                    scrollToTopBtn.style.transform = 'translateY(20px)';
                }

                // Update border rotation based on scroll progress
                const borderRing = scrollToTopBtn.querySelector('.border-ring');
                const rotation = scrollProgress * 360; // Full 360 degree rotation

                borderRing.style.transform = `rotate(${rotation}deg)`;
                borderRing.style.opacity = scrollProgress > 0.1 ? '1' : '0';
            }

            // Scroll to top function
            function scrollToTop() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            }

            // Event listeners
            window.addEventListener('scroll', updateScrollProgress);
            scrollToTopBtn.addEventListener('click', scrollToTop);
        });
    </script>
</body>

</html>
