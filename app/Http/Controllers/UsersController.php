<?php

namespace App\Http\Controllers;


use App\User;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::with('post')

        return view('users', compact('users'));
    }
}
