<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class CardSimpleStats extends Component
{
    public $statSubtitle, $statTitle, $statIconName, $tooltipContent, $titleDesc;

    public function __construct(
        $statSubtitle,
        $statTitle ,
        $statIconName ,
        $tooltipContent,
        $titleDesc
    )
    {
        $this->statSubtitle = $statSubtitle;
        $this->statTitle = $statTitle;
        $this->statIconName = $statIconName;
        $this->tooltipContent = $tooltipContent;
        $this->titleDesc = $titleDesc;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.card-simple-stats');
    }
}
