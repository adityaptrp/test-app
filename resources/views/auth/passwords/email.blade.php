
@extends('auth.layouts.app')

@section('title', 'Reset Password | Dirghayusa')

@section('head-title')
    <div class="text-gray-600 text-2sm mt-1">
        Jangan khawatir! Cukup ketik email Anda dan kami akan mengirimkan kode untuk mengatur ulang kata sandi Anda.
    </div>
@endsection

@section('content')
    @if (session('status'))
        <div class="px-4 py-3.5 rounded-md mb-4 text-emerald-700 bg-emerald-200 text-sm">
            <span>{{ session('status') }}</span>
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="relative w-full mb-4">
            <label for="email" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                Email
            </label>
            <div class="border mb-3 inline-flex w-full items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                <div class="border-r px-3 py-3">
                    <svg class="w-4.5 h-4.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <input class="px-3.5 py-2.5 rounded-none focus:ring-0 focus:outline-none focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" type="email" name="email" id="email" placeholder="example@email.com" autofocus="autofocus">
            </div>
            @error('email')
                <span class="inline-block text-red-400 text-sm mt-3">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="flex justify-between items-center mt-4">
            <span class="text-2sm">
                Kembali ke halaman 
                <a href="{{ route('login') }}" class="text-cs-brown-500 hover:text-cs-brown-600">
                    Login
                </a>
            </span>
            <button class="bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 rounded-default py-2.5 px-4.5 text-white text-2sm  transition duration-300 focus:outline-none shadow-md rounded-md whitespace-nowrap" type="submit">
                Send Reset Link
            </button>
        </div>
    </form>
@endsection