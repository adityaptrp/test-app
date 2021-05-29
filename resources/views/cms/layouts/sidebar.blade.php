<nav class="cms-sidebar-wr scroll md:w-64 md:left-0 md:block md:fixed md:top-0 md:bottom-0 bg-white flex items-center justify-between relative z-20 py-4 md:py-0 md:shadow-cs-100 transition-all duration-500 ease-in-out px-6 md:px-0">
    <div class="relative md:flex-col md:items-stretch md:min-h-full flex-nowrap px-0 flex items-center justify-between w-full mx-auto">
        <!-- Toggler -->
        <div class="w-1/3 flex justify-start md:hidden focus:outline-none text-gray-700 py-1 text-xl leading-none bg-transparent rounded border border-solid border-transparent">
            {{-- burger menu --}}
            <svg xmlns="http://www.w3.org/2000/svg" class="sidebar-burger inline-block cursor-pointer h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h7" />
            </svg>
        </div>

        <!-- Brand -->
        <div class="sidebar-brand w-1/3 md:w-full sticky top-0 flex bg-white mr-0 whitespace-nowrap justify-center md:justify-between md:px-6 z-10 md:z-50 md:border-b md:border-gray-100 items-center">
            <a href="{{ route('home') }}" class="text-gray-600 mt-0.5 text-base uppercase font-bold">
                Dirghayusa
            </a>
            <div data-tippy-content="minimize?" data-tippy-delay="[0, 0]" data-tippy-placement="right" class="sidebar-collapse-btn relative text-2xs cursor-pointer">
                <i class="far fa-circle"></i>
            </div>
        </div>

        <!-- User -->
        <ul class="md:hidden items-center w-1/3 justify-end flex flex-wrap list-none">
            <li class="inline-block relative mr-3.5">
                <x-dropdowns.notification-dropdown />
            </li>
            <li class="inline-block relative">
                <x-dropdowns.user-dropdown />
            </li>
        </ul>

        <!-- Collapse -->
        <div class="cms-sidebar-fade"></div>

        <div class="cms-sidebar md:flex md:flex-col md:items-stretch md:opacity-100 fixed md:relative md:shadow-none bg-white top-0 left-0 right-0 bottom-0 z-40 h-auto items-center flex-1">

            <!-- Collapse header -->
            <div class="md:min-w-full sticky top-0 z-50 md:hidden block py-1 px-6 border-solid bg-white border-gray-200">
                <div class="flex items-center">
                    <div class="w-6/12">
                        <a href="" class="md:block text-left md:pb-2 text-gray-600 mr-0 inline-block whitespace-nowrap text-2base mt-0.5 uppercase font-bold p-4 px-0">
                            Dirghayusa
                        </a>
                    </div>
                    <div class="w-6/12 flex justify-end">
                        <button type="button" class="sidebar-cl-btn cursor-pointer focus:outline-none text-black opacity-50 md:hidden text-lg leading-none bg-transparent rounded border border-solid border-transparent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="px-6 items-center md:hidden bg-gray-100 py-5">
                <div class="flex items-center">
                    <label class="switch mr-2">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>
                    <span class="text-2xs font-semibold">Publikasikan website</span>
                </div>
                <span class="inline-block mt-3 mb-1 py-1 px-2 rounded border border-cs-brown-500 text-xs text-cs-brown-600 font-semibold hover:bg-cs-brown-600 hover:text-white duration-300 cursor-pointer">ramasinta.dirghayusa.com</span>
            </div>

            <div class="sidebar-pf flex justify-between py-4 px-5 md:px-5.5 border-b border-gray-100">
                <div class="flex items-center">
                    <span class="sidebar-pf-img w-9 h-9 md:w-10 md:h-10 rounded-full overflow-x-hidden bg-gray-200 flex items-center justify-center">
                        <img class="w-full object-cover rounded-full" src="{{ auth()->user()->getAvatar() }}"/>
                    </span>
                    <div class="pf-body flex flex-nowrap flex-col ml-3">
                        <h3 class="text-sm mt-0.5 font-semibold whitespace-nowrap">
                            {{ auth()->user()->name }}
                        </h3>
                        <div class="flex items-center flex-nowrap text-xs -mt-0.5">
                            <div class="w-2 h-2 mr-1.5 whitespace-nowrap rounded-full bg-cs-brown-500"></div>
                            <div class="ch-active-btn flex items-center">
                                @if(auth()->user()->roleName() == "master")
                                    <a href="" class="hover:underline">
                                        online
                                    </a>
                                @else
                                    <span>online</span>
                                @endif
                                <div class="ml-1">14:20</div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="fullscreen-btn md:hidden text-2xs mr-1.5 focus:outline-none text-gray-600">
                    <i class="fa fa-expand"></i>
                </button>
            </div>

            <ul>
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="@if(request()->is('admin/dashboard')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif text-xs uppercase h-14 font-bold block">
                        <div class="flex">
                            <i class="fas fa-chart-line text-base @if(request()->is('admin/dashboard')) opacity-75 @else text-gray-300 @endif"></i>
                            <span>Dashboard</span>
                        </div>
                    </a>
                </li>

                @if (auth()->user()->roleName() == 'master')
                    <li>
                        <a href="{{ route('admin.users') }}" class="@if(request()->is('admin/users')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif text-xs uppercase h-14 font-bold block">
                            <div class="flex">
                                <i class="far fa-user-circle text-base"></i>
                                <span>Users</span>
                            </div>
                        </a>
                    </li>
                @endif

                <li>
                    <a href="{{ route('admin.orders') }}" data-count="12" class="@if(request()->is('admin/orders') || request()->is('admin/orders/*')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif sidebar-orders-menu text-xs uppercase h-14 font-bold block">
                        <div class="flex">
                            <i class="fas fa-table text-base"></i>
                            <span data-count="12" class="sidebar-orders-menu-c">Orders</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/" class="@if(request()->is('admin/')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif text-xs uppercase h-14 font-bold block">
                        <div class="flex">
                            <i class="fas fa-folder text-base"></i>
                            <span>Invitation</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/" class="@if(request()->is('admin/')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif text-xs uppercase h-14 font-bold block">
                        <div class="flex">
                            <i class="fas fa-folder text-base"></i>
                            <span>RSVP</span>
                        </div>
                    </a>
                </li>

                <li>
                    <a href="/" class="@if(request()->is('admin/')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif text-xs uppercase h-14 font-bold block">
                        <div class="flex">
                            <i class="fas fa-folder text-base"></i>
                            <span>Design</span>
                        </div>
                    </a>
                </li>

                <!-- divider -->
                <div class="border-t w-full my-2"></div>

                <li>
                    <a href="/" class="@if(request()->is('admin/')) active text-cs-brown-500 hover:text-cs-brown-600 @else <?php echo 'text-gray-700 hover:text-gray-900'; ?> @endif text-xs uppercase h-14 font-bold block">
                        <div class="flex">
                            <i class="fa fa-cog text-base"></i>
                            <span>Settings</span>
                        </div>
                    </a>
                </li>

                {{-- <li>
                    <a href="/" class="text-xs uppercase h-14 font-bold block text-gray-600 hover:text-gray-800">
                        <div class="flex">
                            <i class="fa fa-sign-out-alt text-2sm"></i>
                            <span>Logout</span>
                        </div>
                    </a>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>