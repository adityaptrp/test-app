@extends('layouts.app')

@push('after_style')
    <link rel="stylesheet" href="{{ asset('css/vendor/swiper/swiper.css') }}" />
@endpush

@section('title', 'Jasa Undangan Pernikahan Digital Bali | ' . env('app_name'))

@section('content')
<div class="hm-content">
    @include('layouts.home-header')

    <div class="hm-why-wr mx-wd">
        <div class="flex flex-col items-center px-6 bg-y sm:px-10 lg:px-24 xl:px-28 pt-8  md:pt-32 pb-28 sm:pb-32 md:pb-44">
            <h1 class="text-2.5xl sm:text-3xl font-roboto text-center px-3 sm:px-0 leading-9">
                {{__('messages.hm-service-sec-title')}} <b>dirghayusa.com</b>?
            </h1>
            <p class="mt-5 mb-4 text-center w-full sm:w-2/3">{{__('messages.hm-service-sec-desc')}}</p>
            <div class="swiper-container hm-section-services">
                <div class="swiper-wrapper mt-5 pb-14">
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-hemat-waktu')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg class="h-7 w-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-hemat-waktu-desc')}}
                        </div>
                    </div>
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-fitur-lengkap')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-fitur-lengkap-desc')}} <br>
                            <a href="#features" class="text-blue-400 underline">{{__('messages.hm-service-sec-fitur-lengkap-link')}}</a>
                        </div>
                    </div>
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-ramah-lingkungan')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-ramah-lingkungan-desc')}}
                        </div>
                    </div>
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-mudah-dibagikan')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-mudah-dibagikan-desc')}}
                        </div>
                    </div>
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-tema-beragam')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-tema-beragam-desc')}}
                        </div>
                    </div>
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-proses-cepat')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-proses-cepat-desc')}}
                        </div>
                    </div>
                    <div class="swiper-slide w-1/2 rounded-lg border">
                        <div class="text-right px-7 pt-4 pb-4 text-sm font-bold border-b">
                            <h1>{{__('messages.hm-service-sec-harga-terjangkau')}}</h1>
                        </div>
                        <div class="relative px-7 pt-12 md:pt-9 pb-6 text-2sm sm:text-2sm">
                            <div style="transform: translateY(-50%); top: 0;" class="absolute p-3 rounded-full bg-cs-brown-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                            </div>
                            {{__('messages.hm-service-sec-harga-terjangkau-desc')}}
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
            <div class="mt-3 mb-3 flex flex-col sm:flex-row font-semibold text-center">
                {{__('messages.hm-service-sec-temukan-kami')}}
                <div>
                    <a class="text-cs-brown-500 hover:underline" href="">
                        <i class="fab fa-facebook-f ml-3 text-sm"></i>
                        Facebook
                    </a>
                    <a class="text-cs-brown-500 hover:underline" href="">
                        <i class="fab fa-instagram  ml-2"></i>
                        Instagram
                    </a>
                    <a class="text-cs-brown-500 hover:underline" href="">
                        <i class="fab fa-whatsapp  ml-2"></i>
                        Whatsapp
                    </a>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#fff" fill-opacity="1" d="M0,192L80,208C160,224,320,256,480,245.3C640,235,800,181,960,165.3C1120,149,1280,171,1360,181.3L1440,192L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
        </svg>
    </div>

    <div class="hm-design-wr mx-wd px-28 py-13 md:py-10 flex justify-center gap-10">
        <div class="w-2/5">
            <h1 class="text-3xl font-roboto">Mengapa <b>dirghayusa.com</b>?</h1>
            <p class="text-lg mt-4">
                dirghayusa.com hadir untuk membuat momen bersamamu menjadi lebih berkesan. Kami menyediakan berbagai macam pilihan tema undangan digital dengan harga yang terjangkau dan desain yang elegan. Undangan akan di sebarkan dalam bentuk link yang mudah dibagikan dan mudah di akses di semua perangkat.
            </p>
            <button class="border-2 mt-5 py-2 px-3.5 border-cs-brown-300 rounded-md">Lihat Promo</button>
        </div>

        <div class="w-3/5">
            <div class="flex gap-5">
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
            </div>
            <div class="flex gap-5 mt-5">
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#F7F5EE" fill-opacity="1" d="M0,128L48,122.7C96,117,192,107,288,133.3C384,160,480,224,576,240C672,256,768,224,864,186.7C960,149,1056,107,1152,101.3C1248,96,1344,128,1392,144L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path></svg>
    </div>

    <div class="hm-features-wr mx-wd px-28 mt-13 py-10 pt-5 sm:mt-18 md:mt-28 lg:mt-36 flex justify-center gap-10">
        <div class="w-2/5">
            <h1 class="text-3xl font-roboto">Mengapa <b>dirghayusa.com</b>?</h1>
            <p class="text-lg mt-4">
                dirghayusa.com hadir untuk membuat momen bersamamu menjadi lebih berkesan. Kami menyediakan berbagai macam pilihan tema undangan digital dengan harga yang terjangkau dan desain yang elegan. Undangan akan di sebarkan dalam bentuk link yang mudah dibagikan dan mudah di akses di semua perangkat.
            </p>
            <button class="border-2 mt-5 py-2 px-3.5 border-cs-brown-300 rounded-md">Lihat Promo</button>
        </div>

        <div class="w-3/5">
            <div class="flex gap-5">
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
            </div>
            <div class="flex gap-5 mt-5">
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
                <div class="w-1/2 p-7 rounded-lg border">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam quo iusto odio magni ab sequi quod nemo laudantium reiciendis asperiores?
                </div>
            </div>
        </div>

        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,192L120,181.3C240,171,480,149,720,144C960,139,1200,149,1320,154.7L1440,160L1440,320L1320,320C1200,320,960,320,720,320C480,320,240,320,120,320L0,320Z"></path></svg>
    </div>
</div>
@endsection

@push('after_script')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

    <script>
        var swiper = new Swiper(".swiper-container.hm-section-services", {
            centeredSlides: true,
            spaceBetween: 20,
            loop: true,
            grabCursor: true,
            breakpoints: {
                640: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3,
                },
                1024: {
                    slidesPerView: 4,
                },
                1280: {
                    slidesPerView: 4,
                }
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            // navigation: {
            //     nextEl: ".swiper-button-next",
            //     prevEl: ".swiper-button-prev",
            // },
        });
    </script>
@endpush