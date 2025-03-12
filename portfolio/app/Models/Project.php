<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

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
}
