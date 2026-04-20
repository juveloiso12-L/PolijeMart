<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Polije Mart')</title>
</head>
<body>
    <header class="bg-[##069BC0]">
        <div>
            <img src="{{ asset('images/logoPolije.png') }}" alt="Logo Polije">
            <h3>POLIJE MART</h3>
        </div>
    </header>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">LOG OUT</button>
    </form>
    <main>
        @yield('content')
    </main>
    <footer>

    </footer>
</body>
</html>