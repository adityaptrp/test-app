<div>
    <div class="sm:px-4 pt-8 md:pt-10 mb-1 sm:mb-3 text-sm font-semibold text-gray-500">
        <a href="{{ route('admin.orders') }}" class="@if(request()->is('admin/orders')) text-black border-gray-500 @endif cursor-pointer inline-flex items-center pb-1 mb-6 border-b-2 mr-6">
            <i class="fa fa-inbox mr-1.5"></i>
            Semua Pesanan
        </a>

        <a href="{{ route('admin.orders.chart') }}" class="@if(request()->is('admin/orders/chart')) text-black border-gray-500 @endif cursor-pointer inline-flex items-center pb-1 mb-6 border-b-2">
            <i class="far fa-chart-bar mr-1.5"></i>
            Grafik
        </a>
    </div>

    <div class="flex flex-wrap pb-2 sm:pb-10">
        <div class="w-full mb-4 sm:mb-6 xl:mb-0 lg:w-6/12 xl:w-3/12 sm:px-4">
            <x-cards.card-simple-stats
                statSubtitle="Orders"
                statTooltipSubtitle="Total pesanan yang ada"
                statTitle="350"
                titleDesc="Orders"
                statIconName="fa fa-box-open"
                tooltipContent="Total jumlah pesanan"
            />
        </div>
        <div class="w-full mb-4 sm:mb-6 xl:mb-0 lg:w-6/12 xl:w-3/12 sm:px-4">
            <x-cards.card-simple-stats
                statSubtitle="Pending"
                statTooltipSubtitle="Total pesanan yang masih tertunda"
                statTitle="350"
                titleDesc="Orders"
                statIconName="fa fa-spinner"
                tooltipContent="Total jumlah pesanan yang tertunda"
            />
        </div>
        <div class="w-full mb-4 sm:mb-6 xl:mb-0 lg:w-6/12 xl:w-3/12 sm:px-4">
            <x-cards.card-simple-stats
                statSubtitle="Completed"
                statTooltipSubtitle="Total pesanan yang sudah selesai"
                statTitle="350"
                titleDesc="Orders"
                statIconName="fa fa-check"
                tooltipContent="Total jumlah pesanan yang selesai"
            />
        </div>
        <div class="w-full mb-4 sm:mb-6 xl:mb-0 lg:w-6/12 xl:w-3/12 sm:px-4">
            <x-cards.card-simple-stats
                statSubtitle="Canceled"
                statTooltipSubtitle="Total pesanan yang dibatalkan"
                statTitle="2"
                titleDesc="Orders"
                statIconName="fa fa-times"
                tooltipContent="Total jumlah pesanan yang dibatalkan"
            />
        </div>
    </div>
</div>