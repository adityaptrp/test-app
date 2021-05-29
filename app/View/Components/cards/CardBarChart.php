<?php

namespace App\View\Components\cards;

use Illuminate\View\Component;

class CardBarChart extends Component
{
    public $chartId, $title, $subtitle, $theme;
    
    public function __construct($chartId, $title, $subtitle, $theme = 'light')
    {
        $this->chartId = $chartId;
        $this->title = $title;
        $this->subtitle = $subtitle;
        $this->theme = $theme;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.cards.card-bar-chart');
    }
}
