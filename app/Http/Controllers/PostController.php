<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = [
            ['id' => 1, 'title' => 'first post', 'posted_by' => 'ahmed', 'created_at' => '2022-02-19 10:00:00'],
            ['id' => 2, 'title' => 'second post', 'posted_by' => 'mohamed', 'created_at' => '2022-02-15 05:00:00'],
        ];
        // dd($posts); //to stop excution and dump the $posts
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        return view('posts.create');
    }
}
