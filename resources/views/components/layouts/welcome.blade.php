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
                <div class="hero-content absolute inset-0 z-50 flex items-center justify-center">
                    <div class="container mx-auto px-4 text-center">
                        <h1 class="text-4xl font-bold">Skulo</h1>
                        <p class="text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat esse nulla mollitia, dolore explicabo earum commodi excepturi fugiat inventore! Sed deserunt suscipit reprehenderit eos nemo. Nam facere est facilis dolor?</p>
                        <a href="#" class="btn-primary">Tovább</a>
                    </div>
                </div>
            </div>
        </section>
        {{ $slot }}
    </div>
</body>

</html>
