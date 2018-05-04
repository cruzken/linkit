<?php

namespace App\Http\Controllers;

use App\User;
use App\Post;
Use App\Comment;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($user)
    {
        $user = User::where('name', '=', $user)->first();

        if ($user == null) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        return view('user.user', compact('user'));
    }

    public function showPosts($user)
    {
        $user = User::where('name', '=', $user)->first();
        $posts = Post::where('user_id', '=', $user->id)->get();

        if ($user == null) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        return view('user.posts', compact('posts'));
    }

    public function showComments($user)
    {
        $user = User::where('name', '=', $user)->first();
        $comments = Comment::where('user_id', '=', $user->id)->get();

        if ($user == null) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        return view('user.comments', compact('comments'));
    }

}
