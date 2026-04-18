@extends('layouts.auth')

@section('title', 'Login | Polije Mart')

@section('content')

<div>
    <h1 class="text-2xl font-bold">SELAMAT DATANG</h1>
    <span>Sebelum melanjutkan, Silahkan login terlebih dahulu.</span>
</div>
<div>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <div class="mb-4 mt-4">
            <input type="email" name="email" id="" placeholder="E-mail : " class="w-full p-3 rounded-xl text-sm outline-none focus:ring-0 transition-colors
            @error('email')
                border-red-500 focus:border-red-600 hover:border-red-500
            @else
                border-gray-200 focus:border-blue-600 hover:border-blue-500
            @enderror
            "
            required 
            value="{{ old('email') }}">
        </div>

        @error('email')
            <p class="text-red-500 text-xs mt-1 ml-2 font-medium">{{ $message }}</p>
        @enderror
        <div class="mb-4 mt-4">
            <input type="password" name="password" id="" placeholder="Password : " class="w-full p-3 rounded-xl text-sm outline-none focus:ring-0 transition-colors
            @error('password')
                border-red-500 focus:border-red-600 hover:border-red-500
            @else
                border-gray-200 focus:border-blue-600 hover:border-blue-500
            @enderror
            " required>
        </div>

        @error('password')
            <p class="text-red-500 text-xs mt-1 ml-2 font-medium">{{ $message }}</p>
        @enderror
        <div class="mt-4">
            <span class="text-xs">Belum mempunyai akun ? <a href="{{ route('register') }}" class="text-blue-600 italic hover:underline font-semibold">DAFTAR SEKARANG</a></span>
        </div>
        <div class="mb-4">
            <span class="text-xs"><a href="{{ route('password.request') }}" class="text-blue-600 italic hover:underline font-semibold">LUPA PASSWORD</a></span>
        </div>
        <div>
            <button type="submit" class="bg-[#00b0f0] w-full p-3 rounded-full text-white font-bold hover:bg-[#0092c7] active:bg-[#006083] cursor-pointer transition-colors focus:outline-2 focus:outline-blue-500 focus:outline-offset-2">LOGIN</button>
        </div>
    </form>
</div>
@endsection