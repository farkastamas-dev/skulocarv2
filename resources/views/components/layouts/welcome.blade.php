<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <x-head />

</head>

<body class="bg-skulo-black relative h-full scroll-smooth text-white">
    <div id="app" class="relative">
        <x-navigation />
        <section class="hero-section">
            <div class="hero-image relative h-[calc(100vh-100px)] w-full">
                <img src="{{ Vite::asset('resources/images/hero01.jpg') }}" alt="Hero Image" class="absolute left-0 top-0 z-30 h-full w-full object-cover opacity-50">

            </div>
        </section>
        {{ $slot }}
    </div>
</body>

</html>
