
@extends('auth.layouts.app')

@section('title', 'Reset Password | Dirghayusa')

@section('content-width', 'sm:w-2/3 lg:w-1/2 xl:w-2/5')

@section('head-title')
    <div class="text-gray-600 mt-1 px-4 md:px-10">
        Silahkan masukkan password baru yang menurut Anda lebih aman dan mudah untuk diingat.
    </div>
@endsection

@section('content')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">

        <div class="relative w-full mb-4">
            <label for="email" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                Email
            </label>
            <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                <div class="border-r px-3 py-3">
                    <svg class="w-4.5 h-4.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <input id="email" type="email" class="px-3.5 py-2.5 rounded-none focus:ring-0 focus:outline-none focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" name="email" placeholder="example@email.com" value="{{ $email ?? old('email') }}" required autocomplete="email">
            </div>
        </div>

        {{-- <div class="flex items-center gap-3"> --}}
            <div class="relative w-full mb-4">
                <label for="password" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                    New Password
                </label>
                <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                    <div class="border-r px-3 py-3">
                        <svg class="w-4.5 h-4.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                    </div>
                    <input id="password" type="password" class="px-3.5 rounded-none focus:ring-0 focus:outline-none py-2.5 focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" placeholder="New Password" name="password" required autocomplete="new-password" autofocus="autofocus" placeholder="example@email.com">
                </div>
            </div>

            <div class="relative w-full mb-4">
                <label for="password-confirm" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                    Confirm Password
                </label>
                <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                    <div class="border-r px-3 py-3">
                        <svg class="w-4.5 h-4.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                        </svg>
                    </div>
                    <input id="password-confirm" type="password" class="px-3.5 rounded-none focus:ring-0 focus:outline-none py-2.5 focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" name="password_confirmation" placeholder="Confirm password" required autocomplete="new-password">
                </div>
            </div>
        {{-- </div> --}}

        @error('email')
            <span class="inline-block text-red-400 font-medium text-sm mt-3">
                {{ $message }}
            </span>
        @enderror
        @error('password')
            <span class="inline-block text-red-400 font-medium text-sm mt-3">
                {{ $message }}
            </span>
        @enderror

        <div class="flex justify-between items-center mt-4">
            <span class="text-2sm">
                Kembali ke halaman 
                <a href="{{ route('login') }}" class="text-cs-brown-500 hover:text-cs-brown-600">
                    Login
                </a>
            </span>
            <button class="bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 rounded-default py-2.5 px-4.5 text-white text-2sm  transition duration-300 focus:outline-none shadow-md rounded-md whitespace-nowrap" type="submit">
                Reset Password
            </button>
        </div>
    </form>
@endsection