<nav class="navigation-wr font-roboto w-full">
    <div class="flex justify-between items-center py-5 px-6 lg:px-20 ">
        <div class="flex items-center">
            <a href="" class="nav-header focus:outline-none text-xl sm:text-2xl font-bold">
                Dirghayusa
            </a>
    
            <ul class="hidden lg:flex items-center justify-center mt-0.5 ml-10">
                <li>
                    <a class="mr-7 text-2sm hover:text-cs-brown-500" href="">Partner</a>
                </li>
                <li>
                    <a class="mr-7 text-2sm hover:text-cs-brown-500" href="">{{__('messages.nav-link-cara-bayar')}}</a>
                </li>
                <li>
                    <a class="mr-7 text-2sm hover:text-cs-brown-500" href="">Faq</a>
                </li>
                <li>
                    <a class="text-2sm relative hover:text-cs-brown-500" href="">
                        {{__('messages.nav-link-desain')}}
                        <span class="absolute text-xxs py-0.5 px-1.5 rounded-md bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 text-white ml-2" style="top: -10px;">
                            {{__('messages.nav-link-new-badge')}}
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="flex justify-end">
            <div class="flex items-center">
                <div class="dropdown hidden lg:block mr-2" data-placement="bottom-end" data-offset-x="2" data-offset-y="5">
                    <div class="dropdown-btn py-1 mr-3 flex items-center cursor-pointer">
                        <svg class="h-6 w-6 pointer-events-none" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.25 12C19.25 16.0041 16.0041 19.25 12 19.25C7.99594 19.25 4.75 16.0041 4.75 12C4.75 7.99594 7.99594 4.75 12 4.75C16.0041 4.75 19.25 7.99594 19.25 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M15.25 12C15.25 16.5 13.2426 19.25 12 19.25C10.7574 19.25 8.75 16.5 8.75 12C8.75 7.5 10.7574 4.75 12 4.75C13.2426 4.75 15.25 7.5 15.25 12Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M5 12H19" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                            
                        <span class="mr-1 text-2sm px-1 pointer-events-none" style="pointer-events: none;">
                            {{ __('messages.language-name') }}
                        </span>
                        <svg class="w-2.5 h-2.5 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232" style="pointer-events: none;">
                            <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="currentColor" fill-rule="nonzero"></path>
                        </svg>
                    </div>
                    <div class="dropdown-menu z-50 shadow-lg font-quicksand">
                        <ul class="flex flex-col w-36 text-sm py-1.5 rounded border bg-white">
                            @foreach (Config::get('languages') as $lang => $language)
                                <a href="{{ route('lang.switch', $lang) }}" class="w-full inline-flex justify-between hover:bg-gray-100 py-2 px-4 text-left">
                                    {{$language}}
                                    @if ($lang == App::getLocale())
                                        <svg class="ml-2 h-5 w-5 text-cs-brown-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                        </svg>
                                    @endif
                                </a>
                            @endforeach
                        </ul>
                    </div>
                </div>

                @auth
                    <div class="dropdown lg:pl-4.5 lg:border-l" data-placement="bottom-end" data-offset-y="5">
                        <div class="dropdown-btn flex items-center">
                            <h1 class="hidden lg:block text-2sm pointer-events-none">{{ Auth::user()->username }}</h1> 
                            <div class="hidden lg:block pointer-events-none ml-2 mr-3">
                                <i class="fas fa-caret-down"></i>
                            </div>
                            <img class="h-7 w-7 md:h-9 md:w-9 mr-1 lg:mr-0 pointer-events-none rounded-full object-cover" src="{{ auth()->user()->getAvatar() }}" onerror="this.onerror=null; this.src='{{ asset('img/no_profile.png') }}'">
                        </div>
                        <div class="dropdown-menu z-50 shadow-lg font-quicksand">
                            <ul class="flex flex-col w-44 text-sm pb-1.5 rounded border bg-white">
                                <li>
                                    <div class="w-full py-2.5 mb-1.5 border-b flex justify-center">
                                        <h3 class="text-xs font-medium whitespace-nowrap overflow-hidden overflow-ellipsis w-36 text-center">{{ auth()->user()->email }}</h3>
                                    </div>
                                </li>
                                <li>
                                    <a href="{{ route('admin.dashboard') }}" class="w-full hover:bg-gray-100 whitespace-nowrap inline-block py-2 px-4 text-left">Dashboard</a>
                                </li>
                                <li>
                                    <a href="" class="w-full hover:bg-gray-100 whitespace-nowrap inline-block py-2 px-4 text-left">Ubah Profile</a>
                                </li>
                                <hr class="my-1.5">
                                <li>
                                    <a href="" onclick="event.preventDefault(); this.querySelector('form').submit();" class="w-full hover:bg-gray-100 inline-flex items-center whitespace-nowrap py-2 px-4 text-left">
                                        <i class="fa fa-sign-out text-xs mr-1.5 text-transparent bg-clip-text bg-gradient-to-br from-cs-brown-500 to-cs-brown-600"></i>
                                        Logout
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                        </form>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                @else
                    <a class="hidden lg:flex items-center justify-center py-2.5 px-3.5 text-2xs sm:text-sm bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 transition-all duration-200 rounded-md text-white focus:outline-none focus:ring" href="">
                        <span class="font-semibold">{{__('messages.nav-button')}}</span>
                        <svg class="w-3.5 ml-1.5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <g>
                                <path fill="currentColor" d="M35.67945,352.06641C9.82789,377.91992-2.94945,442.59375.57789,511.41016c69.10156,3.55859,133.58984-9.35157,159.33984-35.10547,40.28516-40.2793,42.8711-93.98633,6.3086-130.54883C129.66773,309.19727,75.9607,311.78516,35.67945,352.06641Zm94.957,81.05468c-10.73046,10.73243-37.60546,16.11133-66.40234,14.627-1.46484-28.67383,3.85938-55.623,14.63281-66.39649,16.78125-16.78515,39.16407-17.86328,54.39844-2.6289C148.49586,393.959,147.42164,416.33789,130.63648,433.12109ZM51.94117,154.48438,2.531,253.29688A28.125,28.125,0,0,0-.00023,264a24.00619,24.00619,0,0,0,24,24H117.4607c23.44141-47.41211,61.01172-123.373,77.89063-157.32812.51953-.91407,1-1.76758,1.52344-2.67188H94.82008C78.47633,128.01562,59.28883,139.875,51.94117,154.48438ZM381.3357,316.57227c-33.96093,17.00781-110.0625,54.67968-157.33593,78.07421V488.209A24.12394,24.12394,0,0,0,247.9607,512a28.02965,28.02965,0,0,0,10.625-2.53125l98.72657-49.39063c14.625-7.3125,26.5-26.5,26.5-42.85937V315.70312c.0664-.041.125-.08789.1875-.1289v-.52734C383.09352,315.56641,382.25367,316.04883,381.3357,316.57227Z" style="fill: #dda885;"></path><path fill="currentColor" d="M505.15992,19.51562A16.73971,16.73971,0,0,0,492.62477,6.94531C460.22633,0,434.37477,0,409.48414,0,320.3357,0,252.80836,40.61523,196.97633,127.81836c-.5586.97852-1.07031,1.877-1.625,2.85352C178.47242,164.627,140.90211,240.58789,117.4607,288h10.53907a95.99975,95.99975,0,0,1,96,96v10.64648c47.27343-23.39453,123.375-61.0664,157.33593-78.07421.96094-.54883,1.832-1.04883,2.78907-1.59766,87.23437-56.06055,127.85937-123.51172,127.85937-212.27734C512.06227,77.60742,512.12867,52.08789,505.15992,19.51562ZM367.99977,192a48,48,0,1,1,48-48.00195A48.02156,48.02156,0,0,1,367.99977,192ZM78.867,381.35156C68.09352,392.125,62.7693,419.07422,64.23414,447.74805c28.79688,1.48437,55.67188-3.89453,66.40234-14.627,16.78516-16.7832,17.85938-39.16211,2.62891-54.39843C118.031,363.48828,95.6482,364.56641,78.867,381.35156Z"></path>
                            </g>
                        </svg>
                    </a>
                @endauth

                <svg xmlns="http://www.w3.org/2000/svg" class="nav-burger block lg:hidden h-5 w-5 ml-2.5 cursor-pointer" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor">
                    <path class="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    <path class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </div>
        </div>
    </div>
</nav>

<div class="navigation-sm flex lg:hidden">
    <ul class="text-base w-full px-6 py-7 border-b">
        <li>
            <a href="" class="inline-block pb-3 w-full font-roboto font-medium">
                Partner
            </a>
        </li>
        <li>
            <a href="" class="inline-block py-3 w-full font-roboto font-medium">
                {{__('messages.nav-link-cara-bayar')}}
            </a>
        </li>
        <li>
            <a href="" class="inline-block py-3 w-full font-roboto font-medium">
                Faq
            </a>
        </li>
        <li>
            <a href="" class="inline-flex items-center py-3 w-full font-roboto font-medium">
                {{__('messages.nav-link-desain')}}
                <span class="text-xxs py-0.5 px-1.5 rounded-md bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 text-white ml-2">{{__('messages.nav-link-new-badge')}}</span>
            </a>
        </li>
        <li class="nav-link-accordion">
            <div class="pt-3 flex justify-between items-center font-roboto cursor-pointer font-medium">
                <span class="flex items-center">
                    {{__('messages.nav-link-pilih-bahasa')}}
                    <svg class="h-5.5 w-5.5 -mt-0.5 ml-1" style="pointer-events: none;" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.25 12C19.25 16.0041 16.0041 19.25 12 19.25C7.99594 19.25 4.75 16.0041 4.75 12C4.75 7.99594 7.99594 4.75 12 4.75C16.0041 4.75 19.25 7.99594 19.25 12Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.25 12C15.25 16.5 13.2426 19.25 12 19.25C10.7574 19.25 8.75 16.5 8.75 12C8.75 7.5 10.7574 4.75 12 4.75C13.2426 4.75 15.25 7.5 15.25 12Z" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M5 12H19" stroke="#141414" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>
                <i class="fas fa-angle-left"></i>
            </div>
            <ul class="nav-link-ac-item hidden font-roboto w-full pl-6 border-l-2 mt-3 text-2sm">
                @foreach (Config::get('languages') as $lang => $language)
                    <li>
                        <a href="{{ route('lang.switch', $lang) }}" class="inline-flex items-center py-2 w-full font-roboto">
                            {{ $language }}
                            @if ($lang == App::getLocale())
                                <svg class="ml-2 h-5 w-5 text-cs-brown-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                </svg>
                            @endif
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>
    </ul>
</div>