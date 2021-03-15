<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller
{
    public function index() 
    {
        $topics = Topic::latest()->get();
        // orderBy('created_at','desc')

        return view('topics.index', compact('topics'));
    }

    public function show(Topic $topic)
    {
        return view('topics.show', compact('topic'));
    }
}
