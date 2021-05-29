
@extends('cms.layouts.app')

@section('title', 'Users | Dirghayusa')

@push('after_style')
    <link rel="stylesheet" href="{{ asset('css/vendor/data-table/data-table.css') }}">
@endpush

@section('content')
    <x-headers.users-header />

    <div class="flex flex-wrap">
        <div class="w-full sm:px-4 mt-5 md:mt-0">
            <x-cards.card-users-table />
        </div>
    </div>
@endsection

@section('outside_contents')
    <div class="fixed top-0 left-0 right-0 bottom-0 flex justify-center items-center overflow-y-auto" style="z-index: 100; background-color: rgba(175, 175, 175, 0.5);">
        <div class="absolute w-144 bg-white rounded-lg border border-gray-200 shadow-cs-50">
            <div class="px-7 py-4.5 border-b flex justify-between items-center">
                <span class="font-medium">Register User</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
            <form method="POST" action="{{ route('register') }}" class="px-9 pt-7 pb-9">
                @csrf 
                <div class="w-full mb-4">
                    <label for="name" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                        Name
                    </label>
                    <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                        <svg class="w-5 h-5 mx-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        <input class="px-0 py-2.5 rounded-none focus:ring-0 focus:outline-none focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" type="text" name="name" id="name" value="" placeholder="Your name" autocomplete="name" autofocus="autofocus">
                    </div>
                    @error('name')
                        <span class="inline-block text-red-400 font-medium text-xs mt-1.5">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="w-full mb-4">
                    <label for="username" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                        Username
                    </label>
                    <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                        <svg class="w-5 h-5 mx-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg>
                        <input class="px-0 py-2.5 rounded-none focus:ring-0 focus:outline-none focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" type="text" name="username" id="username" value="" placeholder="Your username" autocomplete="username" autofocus="autofocus">
                    </div>
                    @error('username')
                        <span class="inline-block text-red-400 font-medium text-xs mt-1.5">
                            {{ $message }}
                        </span>
                    @enderror
                </div>

                <div class="w-full mb-4">
                    <label for="email" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                        Email
                    </label>
                    <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                        <svg class="w-5 h-5 mx-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <input class="px-0 py-2.5 rounded-none focus:ring-0 focus:outline-none focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm" type="email" name="email" id="email" value="" placeholder="example@email.com" autocomplete="email" autofocus="autofocus">
                    </div>
                    @error('name')
                        <span class="inline-block text-red-400 font-medium text-xs mt-1.5">
                            {{ $message }}
                        </span>
                    @enderror
                </div>
        
                <div class="flex gap-4">
                    <div class="relative w-full mb-4">
                        <label for="password" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                            Password
                        </label>
                        <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                            <svg class="w-5 h-5 mx-3 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z" />
                            </svg>
                            <input class="px-0 rounded-none focus:ring-0 focus:outline-none py-2.5 focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm tracking-wider" type="password" name="password" id="password" value="" placeholder="Your password" autofocus="autofocus">
                        </div>
                        @error('password')
                            <span class="inline-block text-red-400 font-medium text-xs mt-1.5">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>

                    <div class="relative w-full mb-4">
                        <label for="password-confirm" class="block text-blueGray-600 text-sm mb-2" htmlFor="grid-password">
                            Confirm Password
                        </label>
                        <div class="border flex items-center rounded-lg focus-within:ring focus-within:ring-cs-brown-100 focus-within:border-cs-brown-500 transition duration-200 overflow-hidden">
                            <svg class="w-5 h-5 mx-3 text-gray-400" xmlns="http://www.w3.org/2000/svg"viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M18 8a6 6 0 01-7.743 5.743L10 14l-1 1-1 1H6v2H2v-4l4.257-4.257A6 6 0 1118 8zm-6-4a1 1 0 100 2 2 2 0 012 2 1 1 0 102 0 4 4 0 00-4-4z" clip-rule="evenodd" />
                            </svg>
                            <input class="px-0 rounded-none focus:ring-0 focus:outline-none py-2.5 focus:shadow-none w-full border-0 placeholder-gray-500 text-2sm tracking-wider" type="password" name="password_confirmation" id="password-confirm" value="" placeholder="Confirm password" autofocus="autofocus">
                        </div>
                    </div>
                </div>
        
                <div class="flex justify-end items-center mt-2">
                    <button class="bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 rounded-default py-2.5 px-4.5 text-white text-2sm  transition duration-300 focus:outline-none shadow-md rounded-md" type="submit">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('after_script')
    <script src="{{ asset('js/datatable.js') }}"></script>
@endpush