
@extends('cms.layouts.app')

@push('after_style')

@endpush

@section('content')
    <x-headers.orders-header />

    <div class="flex flex-wrap xl:flex-nowrap">
        <div class="w-full xl:w-8/12 transition-all duration-500 mt-4 md:mt-0 mb-10 md:mb-12 xl:mb-0 sm:px-4">
            <x-cards.card-line-chart title="Sales Value" subtitle="Overview" chartId="sales-line-chart" theme="dark" />
        </div>
        <div class="w-full xl:w-4/12 transition-all duration-500 sm:px-4">
            <x-cards.card-orders-doughnut-chart />
        </div>
    </div>
@endsection

@push('after_script')
    <script src="{{ asset('js/chartjs.js') }}"></script>

    <script>
        ordersData = {
            labels: [
                "Pending", "Complete", "Cenceled", 
            ],
            datasets: [{
                label: "TeamA Score",
                data: [10, 50, 5],
                backgroundColor: [
                    "#999DA3",
                    "#AD8A85",
                    "#606469",
                ],
                borderColor: [
                    "#fff",
                    "#fff",
                    "#fff",
                ],
                borderWidth: [0, 0, 0]
            }]
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
        customChartJs("orders-doughnut-chart", "doughnut", ordersData);
    </script>
@endpush