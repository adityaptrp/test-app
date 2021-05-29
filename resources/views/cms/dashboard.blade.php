
@extends('cms.layouts.app')

@section('title', 'Dashboard | Dirghayusa')

@section('content')
    <div class="md:py-9 py-10">
        <!-- Card stats -->
        <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 xl:w-3/12 sm:px-4">
                <x-cards.card-stats 
                    statSubtitle="TRAFFIC"
                    statTitle="350,897"
                    statArrow="up"
                    statPercent="3.48"
                    statPercentColor="text-emerald-500"
                    statDescription="Since last month"
                    statIconName="far fa-chart-bar"
                    statIconColor="bg-cs-chart-4"
                    tooltipContent="Jumlah kenaikan pesanan dalam 1 bulan"
                />
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 sm:px-4">
                <x-cards.card-stats
                    statSubtitle="NEW USERS"
                    statTitle="2,356"
                    statArrow="down"
                    statPercent="3.48"
                    statPercentColor="text-red-500"
                    statDescription="Since last week"
                    statIconName="fas fa-chart-pie"
                    statIconColor="bg-cs-chart-5"
                    tooltipContent="Jumlah kenaikan pesanan dalam 1 bulan"
                />
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 sm:px-4">
                <x-cards.card-stats
                    statSubtitle="SALES"
                    statTitle="924"
                    statArrow="down"
                    statPercent="1.10"
                    statPercentColor="text-orange-500"
                    statDescription="Since yesterday"
                    statIconName="fas fa-users"
                    statIconColor="bg-cs-chart-6"
                    tooltipContent="Jumlah kenaikan pesanan dalam 1 bulan"
                />
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 sm:px-4">
                <x-cards.card-stats
                    statSubtitle="PERFORMANCE"
                    statTitle="49,65%"
                    statArrow="up"
                    statPercent="12"
                    statPercentColor="text-emerald-500"
                    statDescription="Since last month"
                    statIconName="fas fa-percent"
                    statIconColor="bg-cs-chart-7"
                    tooltipContent="Jumlah kenaikan pesanan dalam 1 bulan"
                />
            </div>
        </div>
    </div>
    <div class="flex flex-wrap">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 sm:px-4">
            <x-cards.card-line-chart title="Sales Value" subtitle="Overview" chartId="sales-line-chart" theme="dark" />
        </div>
        <div class="w-full xl:w-4/12 sm:px-4">
            <x-cards.card-bar-chart title="Total Orders" subtitle="Performance" chartId="bar-chart" theme="light" />
        </div>
    </div>
    <div class="flex flex-wrap mt-4">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 sm:px-4">
            <CardPageVisits />
        </div>
        <div class="w-full xl:w-4/12 sm:px-4">
            <CardSocialTraffic />
        </div>
    </div>
@endsection

@push('after_script')
    <script src="{{ asset('js/chartjs.js') }}"></script>

    <script>
        barData = {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
            ],
            datasets: [
                {
                    label: new Date().getFullYear(),
                    backgroundColor: "#999DA3",
                    borderColor: "#ed64a6",
                    data: [30, 78, 56, 34, 100, 45, 13],
                    fill: false,
                    barThickness: 10,
                },
                {
                    label: new Date().getFullYear() - 1,
                    fill: false,
                    backgroundColor: "#A68575",
                    borderColor: "#4c51bf",
                    data: [27, 68, 86, 74, 10, 4, 87],
                    barThickness: 10,
                },
            ],
        };

        salesData = {
            labels: [
                "January",
                "February",
                "March",
                "April",
                "May",
                "June",
                "July",
            ],
            datasets: [
                {
                    label: new Date().getFullYear(),
                    backgroundColor: "#4c51bf",
                    borderColor: "#4c51bf",
                    data: [65, 78, 66, 44, 56, 67, 75],
                    fill: false,
                    lineTension: 0.4,
                },
                {
                    label: new Date().getFullYear() - 1,
                    fill: false,
                    backgroundColor: "#fff",
                    borderColor: "#fff",
                    data: [40, 68, 86, 74, 56, 60, 87],
                    lineTension: 0.4,
                },
            ],
        };

        customChartJs("sales-line-chart", "line", salesData);
        customChartJs("bar-chart", "bar", barData);

        window.onload = maxWindow;

    function maxWindow() {
        window.moveTo(0, 0);

        if (document.all) {
            top.window.resizeTo(screen.availWidth, screen.availHeight);
        }

        else if (document.layers || document.getElementById) {
            if (top.window.outerHeight < screen.availHeight || top.window.outerWidth < screen.availWidth) {
                top.window.outerHeight = screen.availHeight;
                top.window.outerWidth = screen.availWidth;
            }
        }
    }
    </script>
@endpush