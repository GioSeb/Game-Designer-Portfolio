<?php
namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Project;

class Window extends Component
{
    public Project $project;
    public int $towerCount;

    public function __construct(Project $project, int $towerCount)
    {
        $this->project = $project;
        $this->towerCount = $towerCount;
    }

    public function render()
    {
        return view('components.window');
    }
}
