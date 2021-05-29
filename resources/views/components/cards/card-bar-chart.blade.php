<div class="{{ $theme == 'dark' ? 'bg-cs-dark-blue' : 'bg-white' }} relative flex px-6 py-6 flex-col min-w-0 break-words w-full mb-6 shadow-cs-100 rounded-xl">
    <div class="rounded-t mb-0 pb-2 bg-transparent">
        <div class="flex flex-wrap items-center">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h6 class="uppercase text-blueGray-400 text-xs {{ $theme == 'dark' ? 'text-gray-300' : 'text-gray-500' }} font-semibold">
                    {{ $subtitle }}
                </h6>
                <h2 class="{{ $theme == 'dark' ? 'text-white' : 'text-gray-700' }} text-xl font-semibold">
                    {{ $title }}
                </h2>
            </div>
        </div>
    </div>
    <div class="flex-auto">
        <div class="relative">
            <canvas id="{{ $chartId }}" height="348"></canvas>
        </div>
    </div>
</div>