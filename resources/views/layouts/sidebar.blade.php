<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>@yield('title', 'Polije Mart')</title>
    <!-- <style type="text/tailwindcss">
        * {
            border: 1px solid blue;
        }
    </style> -->
    <style type="text/tailwindcss">
        @theme {
            --color-polije-blue: #069BC0;
        }
    </style>
</head>

<body class="flex">
    <section>
        <div class="flex flex-col w-64 h-screen bg-polije-blue text-white p-4 shadow-xl">
            <div class="flex flex-col justify-center text-center gap-3">
                <img src="{{ asset('images/logoPolije.png') }}" alt="Logo Polije" width="100px" class="mx-auto">
                <h3 class="text-2xl font-semibold">POLIJE MART</h3>
            </div>
            <div class="mt-10">
                <ul class="">
                    <li>
                        <a href="{{ route('admin.dashboard') }}" @class([
                            'flex item-center pl-10 gap-2 mt-2 transition-color rounded-full p-2 hover:bg-white hover:text-black',
                            'bg-white text-black active:bg-white active:text-black' => request()->routeIs('admin.dashboard'),
                        ])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M13 9V3h8v6zM3 13V3h8v10zm10 8V11h8v10zM3 21v-6h8v6zm2-10h4V5H5zm10 8h4v-6h-4zm0-12h4V5h-4zM5 19h4v-2H5zm4-2" />
                            </svg>
                            <span class="flex items-center font-semibold">DASHBOARD</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.inventory') }}" @class([
                            'flex item-center pl-10 gap-2 mt-2 transition-color rounded-full p-2 hover:bg-white hover:text-black',
                            'bg-white text-black active:bg-white active:text-black' => request()->routeIs('admin.inventory*'),
                        ])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M5 22q-.825 0-1.412-.587T3 20V8.725q-.45-.275-.725-.712T2 7V4q0-.825.588-1.412T4 2h16q.825 0 1.413.588T22 4v3q0 .575-.275 1.013T21 8.724V20q0 .825-.587 1.413T19 22zM5 9v11h14V9zM4 7h16V4H4zm5 7h6v-2H9zm3 .5" />
                            </svg>
                            <span class="flex items-center font-semibold">INVENTORY</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.manageCategory') }}" @class([
                            'flex item-center pl-10 gap-2 mt-2 transition-color rounded-full p-2 hover:bg-white hover:text-black',
                            'bg-white text-black active:bg-white active:text-black' => request()->routeIs('admin.manageCategory*'),
                        ])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M4 4h6v6H4zm10 0h6v6h-6zM4 14h6v6H4zm10 3a3 3 0 1 0 6 0a3 3 0 1 0-6 0" />
                            </svg>
                            <span class="flex items-center font-semibold">CATEGORY</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('admin.manageOrder') }}" @class([
                            'flex item-center pl-10 gap-2 mt-2 transition-color rounded-full p-2 hover:bg-white hover:text-black',
                            'bg-white text-black active:bg-white active:text-black' => request()->routeIs('admin.manageOrder*'),
                        ])>
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24">
                                <path fill="currentColor" d="M10 13.25a.75.75 0 0 0 0 1.5h4a.75.75 0 1 0 0-1.5z" />
                                <path fill="currentColor" fill-rule="evenodd"
                                    d="M14.665 2.33a.75.75 0 0 1 1.006.335l1.813 3.626q.641.031 1.17.106c1.056.151 1.93.477 2.551 1.245s.757 1.691.684 2.755c-.07 1.031-.35 2.332-.698 3.957l-.451 2.107c-.235 1.097-.426 1.986-.666 2.68c-.25.725-.58 1.32-1.142 1.775s-1.214.652-1.974.745c-.73.089-1.64.089-2.76.089H9.802c-1.122 0-2.031 0-2.761-.089c-.76-.093-1.412-.29-1.974-.745s-.892-1.05-1.142-1.774c-.24-.695-.43-1.584-.666-2.68l-.451-2.107c-.348-1.626-.627-2.927-.698-3.958c-.073-1.064.063-1.986.684-2.755c.62-.768 1.494-1.094 2.55-1.245q.53-.074 1.17-.106L8.33 2.665a.75.75 0 0 1 1.342.67l-1.46 2.917q.546-.003 1.149-.002h5.278q.603 0 1.149.002l-1.459-2.917a.75.75 0 0 1 .335-1.006M5.732 7.858l-.403.806a.75.75 0 1 0 1.342.67l.787-1.574c.57-.01 1.22-.011 1.964-.011h5.156c.744 0 1.394 0 1.964.01l.787 1.575a.75.75 0 0 0 1.342-.67l-.403-.806l.174.023c.884.127 1.317.358 1.597.703c.275.34.41.803.356 1.665H3.605c-.054-.862.081-1.325.356-1.665c.28-.345.713-.576 1.597-.703zM4.288 14.1a81 81 0 0 1-.481-2.35h16.386a83 83 0 0 1-.482 2.35l-.428 2c-.248 1.155-.42 1.954-.627 2.552c-.2.58-.404.886-.667 1.098c-.262.212-.605.348-1.212.422c-.629.077-1.447.078-2.628.078H9.85c-1.18 0-1.998-.001-2.627-.078c-.608-.074-.95-.21-1.212-.422c-.263-.212-.468-.519-.667-1.098c-.207-.598-.38-1.397-.627-2.552z"
                                    clip-rule="evenodd" />
                            </svg>
                            <span class="flex items-center font-semibold">ORDER</span>
                        </a>
                    </li>

                    <hr class="my-10">
                    <li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex item-center pl-10 gap-2 mt-2 hover:bg-red-600 active:bg-red-700 hover:text-white active:text-white transition-colors p-2 rounded-full flex items-center font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="currentColor" d="m17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5M4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4z"/></svg>
                                LOG OUT
                            </button>
                        </form>
                        {{-- <a href="#" class="">
                            
                            <span class="flex items-center font-semibold">LOG OUT</span>
                        </a> --}}
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <section>
        @yield('content')
    </section>
</body>

</html>