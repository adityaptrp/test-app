
@extends('designs.layouts.app')

@push('after_style')
    {{-- fonts --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    {{-- First Letter --}}
    <link href="https://fonts.googleapis.com/css2?family=Numans&display=swap" rel="stylesheet">

    {{-- AOS --}}
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
@endpush

@section('title', 'Varuna Desain - Dirghayusa')

@section('design')
    {{-- Header --}}
    <div class="baruna-h mx-wd h-screen flex items-center justify-center" style="background-color: #FFFFFF">
        <div class="flex flex-col z-10">
            {{-- Main Text --}}
            <h3 class="uppercase text-sm md:text-2sm font-semibold text-center tracking-widest px-10 sm:px-0" data-aos="fade">We invite you to celebrate our wedding</h3>
            <div class="main-txt relative flex flex-col items-center justify-center">
                <img class="w-18 h-18 md:w-16 md:h-16 my-4" src="{{ asset('img/designs/varuna/icon-leaf.svg') }}" alt="leaf" data-aos="fade-up">
                <h3 class="uppercase text-xs font-semibold tracking-widest" data-aos="fade">The Wedding Of</h3>
                <div class="groom-bride-t font-bold text-4xl sm:text-5xl md:text-6xl text-center mb-5 mt-1">
                    <h2 data-aos="fade-up">Romeo</h2>
                    <h2 class="-mt-2" data-aos="fade-down">Juliet</h2>
                </div>
                <div class="h-date text-center uppercase font-semibold text-2xs md:text-sm tracking-widest" data-aos="fade">
                    <h3>Sabtu</h3>
                    <h3 class="mt-2">05 / Oktober / 2019</h3>
                </div>
                <div class="bg-and" data-aos="fade">&</div>
            </div>
            {{-- Count down --}}
            <div class="countdown mt-12 flex items-center justify-center font-semibold uppercase" data-aos="zoom-in">
                <div class="flex flex-col text-center">
                    <span>217</span>
                    <h2>Days</h2>
                </div>
                <span class="mx-4 sm:mx-6 md:mx-10">:</span>
                <div class="flex flex-col text-center">
                    <span>1</span>
                    <h2>Hours</h2>
                </div>
                <span class="mx-4 sm:mx-6 md:mx-10">:</span>
                <div class="flex flex-col text-center">
                    <span>46</span>
                    <h2>Minutes</h2>
                </div>
                <span class="mx-4 sm:mx-6 md:mx-10">:</span>
                <div class="flex flex-col text-center">
                    <span>17</span>
                    <h2>Seconds</h2>
                </div>
            </div>
            <div class="flex justify-center items-center mt-10" data-aos="fade-up" data-aos-anchor=".baruna-h .h-date">
                <button class="uppercase px-4 py-2 bg-gradient-to-tr from-cs-brown-600 to-cs-brown-500 text-cs-brown-100 font-semibold tracking-widest text-xs sm:text-2xs rounded focus:outline-none focus:ring-1 ring-cs-brown-pl-3">
                    Save The Date
                </button>
            </div>
        </div>
        <div class="decorate-img-1"></div>
        <div class="decorate-img-2"></div>
    </div>

    {{-- Groom and Bride --}}
    <div class="groombride-c flex flex-col items-center justify-center py-10">
        {{-- Groom Bride Profile --}}
        <div class="flex flex-col md:flex-row justify-center items-center gap-10 md:gap-36">
            <div class="gb-profile flex flex-col justify-center text-center items-center">
                <img class="rounded-full" src="{{ asset('/img/designs/varuna/groombride.jpg') }}" alt="">
                <h1 class="mt-5 text-lg font-semibold" style="font-family: 'Roboto', sans-serif;">Raja Romeo</h1>
                <h2 class="text-2sm">Putra pertama Dari Pasangan</h2>
                <h3 class="italic" style="font-family: 'Playfair Display', serif;">Bapak Romeo & Ibu Romeo</h3>
                <p class="mt-6 font-bold">Denpasar</p>
            </div>
            <div class="gb-profile flex flex-col justify-center text-center items-center">
                <img class="rounded-full" src="{{ asset('/img/designs/varuna/groombride.jpg') }}" alt="">
                <h1 class="mt-5 text-lg font-semibold" style="font-family: 'Roboto', sans-serif;">Raja Romeo</h1>
                <h2 class="text-2sm">Putra pertama Dari Pasangan</h2>
                <h3 class="italic" style="font-family: 'Playfair Display', serif;">Bapak Romeo & Ibu Romeo</h3>
                <p class="mt-6 font-bold">Denpasar</p>
            </div>
        </div>
        {{-- Open Letter --}}
        <div class="mt-5 md:mt-10 flex flex-col justify-center items-center">
            <img class="w-20 h-20 md:w-24 md:h-24 my-4" src="{{ asset('img/designs/varuna/icon-leaf.svg') }}" alt="leaf">
            <div class="text-center -mt-3 max-w-2xl px-6 md:px-0">
                <h2 class="text-2sm" style="font-family: 'Numans', sans-serif;">Ya Tuhanku Yang Maha Pengasih,anugrahkanlah kepada pasangan ini senantiasa kebahagiaan, kesehatan, tetap bersatu dan tidak pernah terpisahkan, panjang umur dan tinggal di rumah yang penuh kegembiraan bersama seluruh keturunannya</h2>
                <h3 class="mt-6 font-semibold text-2sm text-cs-brown-pl-3" style="font-family: 'Playfair Display', serif;">Rg Veda X.85.42</h3>
            </div>
        </div>
    </div>
@endsection

@push('after_script')
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1400,
            easing: 'ease-in-out',
            once: true,
        });
    </script>
@endpush