<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/select', function (){
    return view('select');
});

Route::get('/projects', function(){
    return view('projects');
});

Route::get('/knowledge', function(){
    return view('knowledge');
});

Route::get('/titles', function(){
    return view('titles');
});
