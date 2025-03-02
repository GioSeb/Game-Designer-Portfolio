<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class platform extends Component
{

    public $left = null;
    public $right = null;
    public $bottom = null;
    public $top = null;
    public $width;
    public $height = 75;

    public function __construct($left = null, $right = null, $top = null, $bottom = null, $width = null, $height = 75)
    {
        $this->left = $left;
        $this->right = $right;
        $this->top = $top;
        $this->bottom = $bottom;
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.platform');
    }
}
