@extends('auth.layouts.app')

@section('title', 'Login Dirghayusa')

@section('head-title')
    <div class="text-gray-600 mt-1">
        Ada masalah login ? <a href="/register" class="text-primary-500 hover:text-primary-600 font-medium">Contact Us</a>.
    </div>
@endsection

@section('content')
    <form action="{{ route('login') }}" method="POST">
        @csrf 
        <div class="relative w-full mb-4">
            <label for="username" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                Username
            </label>
            <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                <div class="border-r px-3 py-3">
                    <svg class="w-4.5 h-4.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                    </svg>
                </div>
                <input class="px-3.5 py-2.5 rounded-none focus:ring-0 focus:outline-none focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" type="text" name="username" id="username" value="" placeholder="Your username" autocomplete="username" autofocus="autofocus">
            </div>
        </div>

        <div class="relative w-full mb-4">
            <label for="password" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                Password
            </label>
            <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                <div class="border-r px-3 py-3">
                    <svg class="w-4.5 h-4.5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                    </svg>
                </div>
                <input class="rounded-none focus:ring-0 focus:outline-none px-3.5 py-2.5 focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" type="password" name="password" id="password" value="" placeholder="Your password" autofocus="autofocus">
            </div>
        </div>
        <label class="flex items-center text-2sm cursor-pointer mb-4">
            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
            <span class="ml-2.5">
                Remember me
            </span>
        </label>

        <div>
            @error('username')
                <span class="block text-red-400 font-medium text-xs">
                    {{ $message }}
                </span>
            @enderror
            @error('password')
                <span class="block text-red-400 font-medium text-xs">
                    {{ $message }}
                </span>
            @enderror
        </div>

        <div class="flex justify-between items-center mt-2">
            <a href="{{ route('password.update') }}" class="text-2sm text-cs-brown-500 hover:text-cs-brown-600">
                <span>Forgot password?</span>
            </a>
            <button class="bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 rounded-default py-2.5 px-4.5 text-white text-2sm  transition duration-300 focus:outline-none shadow-md rounded-md" type="submit">
                Login
            </button>
        </div>
    </form>
@endsection