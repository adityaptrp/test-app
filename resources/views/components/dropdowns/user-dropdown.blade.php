
<div class="dropdown relative">
    <div class="dropdown-btn cursor-pointer text-blueGray-500 block">
        <div class="items-center pointer-events-none flex text-2sm">
            <span class="w-8 h-8 md:w-9 md:h-9 text-sm text-white bg-blueGray-200 inline-flex items-center justify-center rounded-full">
                <img class="w-full rounded-full align-middle border-none" src="{{ auth()->user()->getAvatar() }}"/>
            </span>
        </div>
    </div>
    <div class="dropdown-menu z-50 shadow-lg">
        <ul class="flex flex-col w-44 text-sm pb-1.5 rounded border bg-white">
            <li>
                <div class="w-full py-2.5 mb-1.5 border-b flex justify-center">
                    <h3 class="text-xs font-medium whitespace-nowrap overflow-hidden overflow-ellipsis w-36 text-center">{{ auth()->user()->email }}</h3>
                </div>
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