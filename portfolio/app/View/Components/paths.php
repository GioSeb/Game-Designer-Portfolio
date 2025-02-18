<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
class Paths extends Component
{
    public $firstImage;
    public $secondImage;
    public $path;

    public function __construct($firstImage, $secondImage, $path)
    {
        $this->firstImage = $firstImage;
        $this->secondImage = $secondImage;
        $this->path = $path;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.paths');
    }
}
