
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    @livewireStyles

<!-- Scripts -->
<script src="{{ mix('js/app.js') }}" defer></script>
<!--<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.js" defer></script>-->

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>


@stack('modals')

@livewireScripts



