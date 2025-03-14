<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Project extends Model
{
    protected $table = 'projects';
    protected $primaryKey = 'idProject';
    public $timestamps = false;

    protected $fillable = [
        'projectName',
        'projectDescription',
        'tool1',
        'tool2',
        'tool3',
        'tool4',
        'tool5',
        'img1',
        'img2',
        'img3',
        'video'
    ];

    public static function getProjectById($id)
    {
        return self::find($id); // Fetches a project by its primary key
    }

/*     public function store(Request $request)
        {
            $path = $request->file('tool1')->store('public/img/candy'); // Save file in storage/app/public/img/candy

            $project = new Project();
            $project->projectName = $request->input('projectName');
            $project->projectDescription = $request->input('projectDescription');
            $project->tool1 = str_replace('public/', '', $path); // Remove "public/" for consistency with asset() helper
            $project->save();

            return redirect()->back()->with('success', 'Project saved successfully!');
        } */

}
