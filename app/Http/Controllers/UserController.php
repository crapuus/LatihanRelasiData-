<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('users.index', compact('users'));
    }

    public function show($id) 
    {
        // dd($id);
         $users =  User::find($id);
        return view('users.show', compact('users'));
    }

}
