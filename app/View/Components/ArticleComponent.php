<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ArticleComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $articlesRecommendation = [];
    public function __construct($articlesRecommendation)
    {
        $this->articlesRecommendation = $articlesRecommendation;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.article-component');
    }
}
