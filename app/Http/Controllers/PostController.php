<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Post $posts)
    {
        return $posts->all();
    }

    public function show(Post $post)
    {
        return $post;
    }
}
