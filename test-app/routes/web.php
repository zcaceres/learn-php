<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    $name = request('name');
    return view('test', [
        'name'=>$name
    ]);
});

Route::get('/posts/{post}', [PostController::class, 'show']);

Route::get('/items', function () {
    return ['foo'=>'bar'];
});

Route::get('/test', function () {
    return view('test');
});

