<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function show ($slug) {
        return view('test', [
            'post'=> Post::where('slug', $slug)->firstOrFail()
        ]);
    }
}
