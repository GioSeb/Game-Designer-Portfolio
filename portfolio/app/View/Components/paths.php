<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class Paths extends Component
{
    public $firstImage;
    public $secondImage;

    public function __construct($firstImage, $secondImage)
    {
        $this->firstImage = $firstImage;
        $this->secondImage = $secondImage;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.paths');
    }
}
