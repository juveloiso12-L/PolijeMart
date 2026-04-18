@extends('layouts.auth')

@section('title', 'Send Email | Polije Mart')

@section('content')

<div>
    <h1 class="text-2xl font-bold">KIRIM E-MAIL RESET</h1>
    <span>Masukkan email anda untuk reset password.</span>

    @if(session('status'))
        <p class="text-green-700 bg-green-100 border border-green-200 p-3 rounded-lg text-sm mt-4 font-medium">{{ session('status') }}</p>
    @endif

</div>
<div>
    <form action="{{ route('password.email') }}" method="POST">
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

        <div>
            <button type="submit" class="bg-[#00b0f0] w-full p-3 rounded-full text-white font-bold hover:bg-[#0092c7] active:bg-[#006083] cursor-pointer transition-colors focus:outline-2 focus:outline-blue-500 focus:outline-offset-2">KIRIM</button>
        </div>
    </form>
</div>
@endsection