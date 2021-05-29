
@extends('cms.layouts.app')

@push('after_style')
    <link rel="stylesheet" href="{{ asset('css/vendor/data-table/data-table.css') }}">
@endpush

@section('content')
    <x-headers.orders-header />

    <div class="flex flex-wrap">
        <div class="w-full sm:px-4 mt-5 md:mt-0">
            <x-cards.card-orders-table />
        </div>
    </div>
@endsection

@push('after_script')
    <script src="{{ asset('js/datatable.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12"></script>

    <script>
        const ordersMenuApp = new Vue({
            el: '#asd',
            data() {
                return {
                    
                }
            },
            methods: {

            }
        });
    </script>
@endpush