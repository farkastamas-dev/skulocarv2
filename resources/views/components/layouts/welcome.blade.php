<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <x-head />

</head>

<body class="bg-skulo-black relative h-full scroll-smooth text-white">
    <div id="app" class="relative">
        <x-navigation />
        <section class="hero-section">
            <div class="hero-image h-[calc(100vh-100px)] w-full">
                <img src="{{ Vite::asset('resources/images/hero01.jpg') }}" alt="Hero Image" class="h-full w-full object-cover">
            </div>
        </section>
        {{ $slot }}
    </div>
</body>

</html>
