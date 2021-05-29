<nav class="static md:sticky top-0 left-0 w-full z-10 shadow-cs-100">
    <div class="relative hidden md:flex md:flex-row md:flex-nowrap md:justify-start items-center p-4 bg-white">
        <div class="flex w-full mx-autp items-center justify-between md:flex-nowrap flex-wrap md:px-10 px-4">
            <div class="flex flex-col lg:flex-row">
                <!-- Title -->
                <a class="text-sm uppercase hidden md:inline-block mt-0.5 font-semibold"
                href="javascript:void(0)">
                    @if(request()->is('admin/dashboard')) Dashboard @endif
                    @if(request()->is('admin/users')) Tabel User @endif
                    @if(request()->is('admin/orders')) Tabel Pesanan @endif
                    @if(request()->is('admin/orders/chart')) Grafik Pesanan @endif
                </a>

                <div class="flex items-center mt-2 lg:mt-0">
                    <!-- toogle switch -->
                    <label class="switch ml-0 lg:ml-5" data-tippy-hideOnClick="true" data-tippy-placement="right" data-tippy-allowHTML="true" data-tippy-content="Publikasikan website <b>ramasinta.dirghayusa.com</b>">
                        <input type="checkbox">
                        <span class="slider round"></span>
                    </label>

                    <span class="ml-5 font-semibold text-xs text-cs-brown-500 hover:underline cursor-pointer">ramasinta.dirghayusa.com</span>
                </div>
            </div>
            
            <!-- Form -->
            <div class="flex items-center">
                <div class="md:flex flex-row flex-wrap items-center lg:ml-auto mr-6 mt-0.5 text-gray-700">
                    <div class="fullscreen-btn cursor-pointer">
                        <i class="fa fa-expand text-2sm"></i>
                    </div>
                    <div class="h-full mx-3.5 border-r border-gray-300"><br></div>
                    <x-dropdowns.notification-dropdown />
                </div>
                <!-- User -->
                <div class="flex-col md:flex-row list-none items-center hidden md:flex">
                    <x-dropdowns.user-dropdown />
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="flex items-center py-4 px-4 bg-white border-t shadow-cs-100">
        <h1 class="px-4 md:px-10 text-gray-400 text-sm">
            <a href="" class="text-cs-brown-500">
                <i class="fas fa-home mr-1 text-xs"></i>
            </a> 
            /
            <a href="" class="text-cs-brown-500 hover:underline mx-1">Invitation</a>
            / Orders
        </h1>
    </div> -->
</nav>