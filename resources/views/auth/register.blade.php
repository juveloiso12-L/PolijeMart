@extends('layouts.auth')

@section('title', 'Register | Polije Mart')

@section('content')

<div>
    <h1 class="text-2xl font-bold">DAFTAR AKUN</h1>
    <span>Silahkan membuat akun baru terlebih dahulu.</span>
</div>
<div>
    <form action="{{ route('register') }}" method="POST">
        @csrf
        <div class="mb-4 mt-4">
            <input type="text" name="name" id="" placeholder="User Name : " class="w-full p-3 rounded-xl text-sm outline-none focus:ring-0 transition-colors
            @error('name')
                border-red-500 focus:border-red-600 hover:border-red-500
            @else
                border-gray-200 focus:border-blue-600 hover:border-blue-500
            @enderror" 
            required 
            value="{{ old('name') }}">
        </div>

        @error('name')
            <p class="text-red-500 text-xs mt-1 ml-2 font-medium">{{ $message }}</p>
        @enderror
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
        <div class="mb-2 mt-4">
            <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirm Password : " class="w-full p-3 rounded-xl text-sm outline-none focus:ring-0 transition-colors
            @error('password_confirmation')
                border-red-500 focus:border-red-600 hover:border-red-500
            @else
                border-gray-200 focus:border-blue-600 hover:border-blue-500
            @enderror
            " required>
        </div>

        @error('password_confirmation')
            <p class="text-red-500 text-xs mt-1 ml-2 font-medium">{{ $message }}</p>
        @enderror
        <div class="my-4">
            <span class="text-xs">Sudah mempunyai akun ? <a href="{{ route('login') }}" class="text-blue-600 italic hover:underline font-semibold">LOGIN SEKARANG</a></span>
        </div>
        <div>
            <button type="submit" class="bg-[#00b0f0] w-full p-3 rounded-full text-white font-bold hover:bg-[#0092c7] active:bg-[#006083] cursor-pointer transition-colors focus:outline-2 focus:outline-blue-500 focus:outline-offset-2">DAFTAR</button>
        </div>
    </form>
</div>
@endsection