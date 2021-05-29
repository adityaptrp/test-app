<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Admin Side | Dirghayusa')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    @stack('after_style')
</head>
<body class="font-roboto">
    @include('cms.layouts.sidebar')
    <div class="r-content relative flex flex-col min-h-screen md:ml-64 bg-blueGray-100 transition-all duration-500 ease-in-out">
        @include('cms.layouts.navbar')
        <div class="px-6 md:px-10 flex flex-col flex-grow mx-auto w-full bg-gray-100">
            <div class="flex-grow">
                @yield('content')
            </div>
            @include('cms.layouts.footer')
        </div>
    </div>

    @yield('outside_content')

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="https://kit.fontawesome.com/e2e268e27c.js" crossorigin="anonymous"></script>
    <script src="{{ asset('js/cms/general.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/tippy.js') }}"></script>

    @stack('after_script')
</body>
</html>
