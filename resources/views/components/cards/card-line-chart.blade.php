
<div class="relative {{ $theme == 'dark' ? 'bg-cs-dark-blue' : 'bg-white' }} px-6 py-6 flex flex-col min-w-0 break-words w-full shadow-lg rounded-xl bg-blueGray-700 overflow-hidden">
    <div class="mb-0 pb-2">
        <div class="flex flex-wrap items-center">
            <div class="relative w-full max-w-full flex-grow flex-1">
                <h6 class="uppercase text-blueGray-100 {{ $theme == 'dark' ? 'text-gray-300' : 'text-gray-500' }} text-xs font-semibold">
                    {{ $subtitle }}
                </h6>
                <h2 class="{{ $theme == 'dark' ? 'text-white' : 'text-gray-700' }} text-xl font-semibold">
                    {{ $title }}
                </h2>
            </div>
        </div>
    </div>
    <div class="flex-auto">
        <!-- Chart -->
        <div class="relative">
            <canvas id="{{ $chartId }}" height="348"></canvas>
        </div>
    </div>
</div>