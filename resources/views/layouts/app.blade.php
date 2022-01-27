<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Ekghanti') }}</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('assets/dist/css/adminlte.min.css')}}">
        @livewireStyles
        <script src="{{URL::asset('js/app.js') }}" defer></script>
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    </head>
    <body class="font-sans antialiased">
        <x-jet-banner />

        <div class="min-h-screen bg-gray-100">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                @yield('mainContent')
            </main>
        </div>

        @stack('modals')

        @livewireScripts

        <script src="{{URL::asset('assets/plugins/jquery/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <script src="{{URL::asset('assets/dist/js/adminlte.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/chart.js/Chart.min.js')}}"></script>
        <script src="{{URL::asset('assets/dist/js/demo.js')}}"></script>
        <script src="{{URL::asset('assets/dist/js/pages/dashboard2.js')}}"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    </body>
</html>
