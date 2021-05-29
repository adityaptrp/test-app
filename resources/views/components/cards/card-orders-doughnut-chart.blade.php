<div class="relative px-6 py-6 xl:px-4 xl:py-4 flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-cs-100 rounded-lg">
    <div class="rounded-t mb-0 pb-2 bg-transparent">
        <div class="flex flex-wrap items-center">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h6 class="uppercase text-blueGray-400 text-xs text-gray-500 font-semibold">
                    Performance
                </h6>
                <h2 class="text-gray-800 text-xl font-semibold">
                    Total orders
                </h2>
            </div>
        </div>
    </div>
    <div class="flex-auto">
        <span class="flex justify-end text-2xs mb-4 -mt-0.5">Orders chart</span>
        <div class="relative flex justify-center">
            <div class="absolute" style="top: 39%; left: 50%; transform: translate(-50%, -50%);">
                <span class="flex flex-col text-center">
                    <span class="font-semibold text-sm">Achieved</span>
                    <span class="text-2xl">50</span>
                    <span class=" -mb-1 text-xs text-gray-500">
                        Target : 100
                        <i class="fa fa-info-circle ml-1" data-tippy-content="Target dalam 1 bulan" data-tippy-placement="bottom"></i>
                    </span>
                </span>
            </div>
            <div class="doughnut" style="max-width: 275px;">
                <canvas id="orders-doughnut-chart" height="100%"></canvas>
            </div>
        </div>
        <span class="text-2sm xl:text-sm font-semibold block text-center px-4 mt-3" :class="{ 'px-7': sidebarCollapse }">Perbandingan order selesai dan batal adalah 50 : 5.</span>
    </div>
</div>