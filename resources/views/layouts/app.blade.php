<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Styles -->
    @livewireStyles
    </head>
    <body class="font-sans antialiased">



    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="margin-bottom: 40px;">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('home')}}">Marketplace</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link @if(request()->is('admin/stores*')) active @endif" aria-current="page" href="{{route('admin.stores.index')}}">Lojas</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link @if(request()->is('admin/products*')) active @endif" href="{{route('admin.products.index')}}">Produtos</a>
                    </li>
                </ul>
                <div class="d-flex">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link"  href="#" onclick="event.preventDefault(); document.querySelector('form.logout').submit(); ">Sair</a>
                            <form action="{{route('logout')}}" class="logout" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>


        <x-banner />

        <div class="min-h-screen bg-gray-100">
            @if (Auth::check())
                @livewire('navigation-menu')
            @endif

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <div class="container">
                @include('flash::message')
                @yield('content')

            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
