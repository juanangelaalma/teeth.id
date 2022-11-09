<?php

namespace App\View\Components;

use App\Models\Feedback;
use Illuminate\View\Component;

class ReviewsComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $feedback = null;
    public function __construct()
    {
        $this->feedback = Feedback::with('user')->latest()->take(5)->get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.reviews-component');
    }
}
