
<div class="relative flex flex-col min-w-0 break-words bg-white rounded-lg mb-6 xl:mb-0 shadow-cs-100">
    <div class="flex-auto p-4">
        <div class="flex flex-wrap">
            <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                <h5 class="text-gray-400 uppercase font-bold text-xs">
                    {{ $statSubtitle }}
                    <i class="fa fa-info-circle ml-1" data-tippy-content="{{ $tooltipContent }}" data-tippy-placement="top"></i>
                </h5>
                <span class="font-semibold text-xl text-gray-700">
                    {{ $statTitle }}
                </span>
            </div>
            <div class="relative w-auto flex-initial">
                <div class="{{ $statIconColor }} text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-cs-100 rounded-full">
                    <i class="{{ $statIconName }}"></i>
                </div>
            </div>
        </div>
        <p class="text-sm text-gray-400 mt-4">
            <span class="{{ $statPercentColor }} mr-2">
                <i class="{{ $statArrow === 'up' ? 'fas fa-arrow-up' : 'fas fa-arrow-down' }}"></i>
                {{ $statPercent }}%
            </span>
            <span class="whitespace-nowrap">{{ $statDescription }}</span>
        </p>
    </div>
</div>