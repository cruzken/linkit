<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);

        return view('home', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('post.post',compact('post'));
    }

    public function create()
    {
        return view('post.create');
    }

    public function store(Post $post)
    {
        $this->validate(request(), [
            'title' =>  'required',
            'body'  =>  'required_without_all:url',
            'url'   =>  'required_without_all:body'
        ]);

        $url = request('url');
        $url = ($url) ? (parse_url($url, PHP_URL_SCHEME) ? '' : 'http://') . $url : '';

        $requests = [
            'title' => request('title'),
            'body' => request('body'),
            'url' => $url
        ];

        auth()->user()->addPost(
            new Post($requests)
        );

        return redirect('/');
    }
}
