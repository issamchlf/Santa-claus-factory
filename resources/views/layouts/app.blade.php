<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Christmas Toy Factory')</title>
    @vite('resources/css/app.css')
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body class="flex flex-col min-h-screen overflow-x-hidden bg-[#272b33] text-white">

    <x-header />


    <main class="flex-grow">
        @yield('content')
    </main>


    <x-footer />
</body>

</html>
