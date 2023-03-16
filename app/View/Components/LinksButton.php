<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class LinksButton extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $brand,
        public string $brandColor,
        public string $href
    ) {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.links-button');
    }
}
