<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class goalLayout extends Component
{
    public $backgroundImage = null;

    /**
     * Create a new component instance.
     */
    public function __construct($backgroundImage = null)
    {
        $this->backgroundImage = $backgroundImage; 
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('layouts.goal-layout');
    }
}
