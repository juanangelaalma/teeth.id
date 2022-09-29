<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FeatureCardComponent extends Component
{
    // public string $title;
    // public string $description;
    // public function __construct($title = "", $description = "")
    // {
    //     $this->title = $title;
    //     $this->description = $description;
    // }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.feature-card-component');
    }
}
