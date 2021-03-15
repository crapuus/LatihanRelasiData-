<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserTopicController extends Controller
{
    public function index(Request $request) 
    {
        // dd($request);
        $topics = $request->user()->topics()->latest()->get();
        return view('user.topics.index', compact('topics'));
    }

    
}
