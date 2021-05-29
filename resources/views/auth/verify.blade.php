<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Verify Email | Dirghayusa</title>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
    </head>
    <body class="verify-wr container text-center">
        <a href="{{ route('home') }}" class="btn-back-h-v" title="Back Home">
            <svg class="w-6 xs:w-7 h-6 xs:h-7" viewBox="0 0 24 24" fill="currentColor">
                <g><path d="M20 11H7.414l4.293-4.293c.39-.39.39-1.023 0-1.414s-1.023-.39-1.414 0l-6 6c-.39.39-.39 1.023 0 1.414l6 6c.195.195.45.293.707.293s.512-.098.707-.293c.39-.39.39-1.023 0-1.414L7.414 13H20c.553 0 1-.447 1-1s-.447-1-1-1z"></path></g>
            </svg>
        </a>
        <h1 class="text-2xl sm:text-3xl font-bold mb-1">Verify your email address</h1>
        @if (session('resent'))
            <h2 class="text-md sm:text-2md text-blue-500">A fresh verification link has been sent to your email address.</h2>
        @elseif (session('email_update_success'))
            <h2 class="text-md sm:text-2md text-green-500 px-7 sm:px-0 w-full sm:w-4/5 lg:w-3/5">{{ session('email_update_success') }}</h2>
        @else
            <h3 class="text-md sm:text-2md px-7 sm:px-0 w-full sm:w-4/5 lg:w-3/5">You will need to verify your email to complete registration.</h3>
        @endif
        
        <div class="verify-img my-8">
            <img src="{{ asset('img/verify.svg') }}" alt="">
        </div>

        <h3 class="text-sm sm:text-2md px-7 sm:px-0 w-full sm:w-4/5 lg:w-3/5">An email has been sent to <b>{{ auth()->user()->email }}</b>  with a link to verify your account. If you have not received the email after a few minutes, please check your spam folder.</h3>

        <div class="flex mt-6">
            <form method="POST" action="{{ route('verification.resend') }}">
                @csrf
                <button type="submit" class="resend-email py-2.5 px-4.5 bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 focus:ring focus:ring-cs-brown-400 focus:outline-none text-white rounded-full text-sm mr-3">Resend Email</button>
            </form>

            <button class="contact-supp focus:outline-none focus:ring focus:ring-cs-brown-200 cursor-pointer py-2 px-4 rounded-full text-sm">Contact Support</button>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

        <script src="{{ asset('js/verify.js') }}"></script>
    </body>
</html>