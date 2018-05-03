<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function show($user)
    {
        $user = User::where('name', '=', $user)->get();

        if ($user->isEmpty()) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        return $user;
    }
}
