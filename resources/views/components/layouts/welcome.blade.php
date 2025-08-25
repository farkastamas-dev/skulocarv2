<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <x-head />

</head>

<body class="bg-skulo-black relative h-full scroll-smooth text-white">
    <div id="app" class="relative">
        <x-navigation />
        <x-mobilemenu />

        <!-- Hero Slider -->
        <section class="hero-slider relative h-[750px] overflow-hidden">
            <!-- Slide Container -->
            <div class="slide-container relative h-full w-full">
                <!-- Slide 1 -->
                <div class="slide absolute inset-0 h-full w-full transition-opacity duration-700 ease-in-out" data-slide="0">
                    <img src="{{ Vite::asset('resources/images/hero01.jpg') }}" alt="Hero Image 1" class="h-full w-full object-cover object-center opacity-50">
                    <div class="hero-content justify-left absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
                        <div class="container mx-auto px-4 text-left">
                            <h1 class="text-4xl font-bold">Skulo</h1>
                            <p class="text-lg">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse nulla mollitia, dolore explicabo earum commodi excepturi fugiat inventore! Sed deserunt suscipit reprehenderit eos nemo. Nam facere est facilis dolor?
                            </p>
                            <a href="#" class="btn-primary">Tovább</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="slide absolute inset-0 h-full w-full opacity-0 transition-opacity duration-700 ease-in-out" data-slide="1">
                    <img src="{{ Vite::asset('resources/images/image02.webp') }}" alt="Hero Image 2" class="h-full w-full object-cover object-center opacity-50">
                    <div class="hero-content justify-left absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
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
                    <img src="{{ Vite::asset('resources/images/hero02.jpg') }}" alt="Hero Image 3" class="h-full w-full object-cover object-center opacity-50">
                    <div class="hero-content justify-left absolute inset-0 z-50 mx-auto flex h-full max-w-7xl items-center">
                        <div class="container mx-auto px-4 text-left">
                            <h1 class="text-4xl font-bold">Alkatrészek</h1>
                            <p class="text-lg">
                                Széles választék autóalkatrészekből és gumiabroncsokból. Minőségi termékek kedvező áron, gyors szállítással.
                            </p>
                            <a href="#" class="btn-primary">Termékek</a>
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
            </div>
        </section>

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
        });
    </script>
</body>

</html>
