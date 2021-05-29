<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="relative w-full h-full min-h-screen flex items-center justify-center">
        {{-- <div class="absolute top-0 w-full h-full bg-blueGray-800 bg-no-repeat bg-full" :style="`background-image: url('${registerBg2}');`"></div> --}}
        
        {{-- content --}}
            <div class="w-full my-10 mx-6 sm:mx-0 @yield('content-width', 'sm:w-2/3 lg:w-2/5 xl:w-1/3') font-roboto">
                <div class="pb-5 text-center">
                    {{-- <a href="/" class="inline-flex items-center mb-2">
                        <div class="bg-gradient-to-br from-primary-500 to-teal-500 rounded-2xl">
                            <img class="w-16 h-16" src="/images/logo/mark.svg">
                        </div>
                    </a> --}}
                    <h1 class="text-center text-black font-medium capitalize text-3xl">
                        Dirghayusa
                    </h1>
                    @yield('head-title')
                </div>

                <div class="relative flex flex-col min-w-0 break-words w-full mb-4 rounded-lg border border-gray-200 shadow-cs-50">
                    <div class="flex-auto p-10">
                        @yield('content')
                    </div>
                </div>

                <div class="flex justify-between mt-3">
                    <div class="text-sm text-gray-500 font-semibold py-1">
                        Copyright © 2021 - {{ date('Y') }}
                        <a href="https://www.creative-tim.com?ref=vn-footer-small" class="text-black hover:text-blueGray-300 text-sm font-semibold py-1">
                            Dirghayusa
                        </a>
                    </div>
                    <div class="">
                        <a href="href="{{ route('home') }}"" class="text-cs-brown-500 hover:text-cs-brown-600 flex items-center text-sm py-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17l-5-5m0 0l5-5m-5 5h12" />
                            </svg>
                            Home
                        </a>
                    </div>
                </div>
            </div>
    </div>

    <script src="https://kit.fontawesome.com/e2e268e27c.js" crossorigin="anonymous"></script>
</body>
</html>
