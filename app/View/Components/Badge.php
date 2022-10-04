<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Badge extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    const TYPES = [
        'success' => 'border-primary text-primary',
        'pending' => 'border-secondary text-secondary',
        'fail' => 'border-red-400 text-red-400',
    ];

    public $styles = "";
    public function __construct($type = "success")
    {
        $this->styles = self::TYPES[$type];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.badge');
    }
}
