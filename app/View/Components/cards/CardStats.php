<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class CardStats extends Component
{
    public $statSubtitle,
        $statTitle,
        $statArrow,
        $statPercent,
        $statPercentColor,
        $statDescription,
        $statIconName,
        $statIconColor,
        $tooltipContent;

    public function __construct(
        $statSubtitle,
        $statTitle ,
        $statArrow ,
        $statPercent ,
        $statPercentColor,
        $statDescription ,
        $statIconName ,
        $statIconColor,
        $tooltipContent
    )
    {
        $this->statSubtitle = $statSubtitle;
        $this->statTitle = $statTitle;
        $this->statArrow = $statArrow;
        $this->statPercent = $statPercent;
        $this->statPercentColor = $statPercentColor;
        $this->statDescription = $statDescription;
        $this->statIconName = $statIconName;
        $this->statIconColor = $statIconColor;
        $this->tooltipContent = $tooltipContent;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.card-stats');
    }
}
