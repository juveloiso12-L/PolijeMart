<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Polije Mart')</title>
    <!-- <style type="text/tailwindcss">
        * {
            border: 1px solid black;
        }
    </style> -->
</head>
<body class="flex">
    <section class="bg-[#069bc0] h-screen w-1/2 grid place-content-center rounded-r-3xl">
        <div class="bg-white p-10 rounded-2xl">
            @yield('content')
        </div>
    </section>
    <section class="h-screen w-1/2 grid place-content-center rounded-xl">
        <div class="flex justify-center flex-col items-center text-center gap-3">
            <div>
                <img src="{{ asset('images/logoPolije.png') }}" alt="Logo Polije" width="100px">
            </div>
            <div>
                <h1 class="font-bold text-3xl">POLIJE MART</h1>
                <h3 class="text-2xl">Solusi Kepraktisan Belanja Anda</h3>
            </div>
        </div>
    </section>
</body>
</html>