<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Project; // Add this line

class Window extends Component
{
    public Project $project;

    /**
     * Create a new component instance.
     *
     * @param Project $project
     */
    public function __construct(Project $project)
    {
        $this->project = $project;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.window');
    }
}
