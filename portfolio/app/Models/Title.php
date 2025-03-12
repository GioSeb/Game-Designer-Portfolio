<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Title extends Model
{
    protected $primaryKey = 'idTitle';
    public $timestamps = false;
    protected $fillable = [
        'titleName',
        'titleDescription',
        'img'
    ];
}
