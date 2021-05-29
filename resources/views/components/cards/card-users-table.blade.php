<div class="relative bg-white flex flex-col min-w-0 break-words w-full mb-6 shadow-cs-100 rounded-lg">
    <div class="flex flex-wrap px-8 pt-8">
        <button class="flex mr-3 mb-3 items-center justify-center py-2 px-3 rounded-md bg-gradient-to-br from-cs-brown-500 to-cs-brown-600 hover:from-cs-brown-600 hover:to-cs-brown-600 transition-colors duration-400 focus:outline-none focus:ring focus:ring-cs-brown-300 text-white text-sm">
            Tambah
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-1 -mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
            </svg>
        </button>
        <div class="border rounded-md flex mb-3 mr-3">
            <button class="orders-import-btn flex items-center justify-center py-2 px-3 focus:outline-none rounded-l-md bg-white text-sm focus:ring focus:ring-cs-brown-200">
                <i class="fas fa-download mr-2 text-xs"></i>
                Import
            </button>
            <button class="orders-eksport-btn border-gray-200 flex items-center justify-center py-2 px-3 focus:outline-none rounded-r-md bg-white text-sm focus:ring focus:ring-cs-brown-200">
                <i class="fas fa-upload mr-2 text-xs"></i>
                Eksport
            </button>
        </div>
        <x-dropdowns.options-table-dropdown/>
    </div>
    <div class="block w-full px-8 pb-8">
        <table id="datatable" class="display table">
            <thead>
                <tr>
                    <th>
                        <div class="relative">
                            <x-dropdowns.selected-table-dropdown/>
                        </div>
                    </th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Tgl Dipesan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Nama</th>
                    <th>Harga</th>
                    <th>Tgl Dipesan</th>
                    <th>Status</th>
                    <th></th>
                </tr>
            </tfoot>
            @php
                $orders = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11'];
            @endphp
            <tbody class="body-t-striped">
                @foreach ($orders as $order)
                    <tr>
                        <td style="width: 20px; min-width: 20px; max-width: 20px;">
                            <input v-model="orderIds" :value="order.id" class="select-item" type="checkbox">
                        </td>
                        <td style="width: 200px; min-width: 200px; max-width: 200px; overflow-x:auto;">
                            <a href="" class="text-cs-blue-500 font-semibold hover:underline">Dika Putra (rama-sinta)</a>
                        </td>
                        <td style="width: 140px; min-width: 140px; max-width: 140px;">
                            <span class="font-semibold">Rp 420.000</span>
                        </td>
                        <td style="width: 140px; min-width: 140px; max-width: 140px;">
                            <span>22 May, 2020 <br> at </span>
                            <span class="font-semibold">14:20</span>
                        </td>
                        <td style="width: 70px; min-width: 70px; max-width: 70px;">
                            @if ($order % 2)
                                <span class="text-xs py-1.5 w-20 text-center border border-green-400 text-green-500 font-bold inline-block rounded-full" style="background-color: rgba(52, 211, 153, 0.15);">Complete</span>
                            @else
                                <span class="text-xs py-1.5 w-20 text-center border border-cs-brown-500 text-cs-brown-500 font-bold inline-block rounded-full" style="background-color: rgba(180, 132, 99, 0.1);">Pending</span>
                            @endif
                        </td>
                        <td style="width: 25px; min-width: 25px; max-width: 25px;">
                            <x-dropdowns.rows-table-dropdown />
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table> 
    </div>
</div>