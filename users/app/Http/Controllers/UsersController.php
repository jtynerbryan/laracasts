<?php

namespace App\Http\Controllers;

use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function store()
    {
        $user = new User([
          'name' => request('name'),
          'email' => request('email'),
          'password' => bcrypt(request('password'))
        ]);

        $user->save();

        return back();
    }
}
