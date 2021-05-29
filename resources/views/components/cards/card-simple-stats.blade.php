<div class="flex-auto shadow-cs-100 p-4 bg-white rounded-lg">
    <div class="flex flex-wrap">
        <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
            <h5 class="flex items-center text-gray-400 uppercase font-bold text-xs">
                <span>{{ $statSubtitle }}</span>
                <i class="fa fa-info-circle ml-1" data-tippy-content="{{ $tooltipContent }}" data-tippy-placement="top"></i>
            </h5>
            <span class="font-semibold text-xl text-gray-700">
                {{ $statTitle }}
                <span class="text-sm">{{ $titleDesc }}</span>
            </span>
        </div>
        <div class="relative w-auto flex-initial">
            <div class="p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-cs-100 rounded-full bg-white text-gray-800 border">
                <i class="{{ $statIconName }}"></i>
            </div>
        </div>
    </div>
</div>