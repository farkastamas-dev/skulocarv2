<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=family=Inter:wght@300;400;500;600;700&display=swap&Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
    @livewireStyles
</head>

<body class="bg-dark-bg text-dark-text">
    <!-- Header -->
    <x-header />
    <div class="pt-24">
        {{ $slot ?? '' }}
    </div>
    <!-- Footer -->
    <x-footer />
    <!-- Page to Top Button -->
    <button id="page-to-top" class="fixed bottom-8 right-8 z-50 hidden h-12 w-12 items-center justify-center rounded-full border-4 border-transparent bg-yellow-500 text-black transition-all duration-300 hover:scale-110 hover:bg-yellow-400">
        <i class="fa-solid fa-chevron-up text-xl"></i>
    </button>
    @stack('modals')
    @stack('scripts')
</body>

</html>
