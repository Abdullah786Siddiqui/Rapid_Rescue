<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin Panel - @yield('title')</title>
     {{-- Flowbite CSS --}}
     <link href="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.css" rel="stylesheet" />
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    {{-- Remix Icon --}}
    <!-- Remix Icon CDN -->
<link href="https://cdn.jsdelivr.net/npm/remixicon/fonts/remixicon.css" rel="stylesheet">


    <!-- Scripts -->
    @vite('resources/js/app.js')
    {{-- Style --}}
        @vite(['resources/css/Admin/main.css', 'resources/js/app.js'])

</head>
<body class="font-sans ">

     {{-- navbar --}}
@include('components.Admin.header')
     {{-- Sidebar --}}
@include('components.Admin.sidebar')
        <!-- Content -->
        <main class=" sm:ml-60 p-8 mt-12   h-[calc(100vh-4rem)] overflow-y-auto ">
               @include('components.Toast.toast')
            @yield('admin')
        </main>
    </div>
     {{-- Flowbite JS --}}
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>
</body>
</html>
