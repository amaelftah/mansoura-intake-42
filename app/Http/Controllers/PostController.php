<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

    //    $test = Post::where('title', 'First Post')->get();
    //    dd($test);

        // dd($posts); //to stop excution and dump the $posts
        return view('posts.index',[
            'posts' => $posts,
        ]);
    }

    public function create()
    {
        $users = User::all();
        return view('posts.create',[
            'users' => $users,
        ]);
    }

    public function show($postId)
    {
        $post = Post::find($postId); //App\Model\Post
        $postOtherSyntax = Post::where('id', $postId)->first();
        dd($post, $postOtherSyntax);
        return $postId;
    }

    public function store(StorePostRequest $request)
    {
        //logic to validate the request data
        // request()->validate([
        //     'title' => ['required', 'min:3'],
        //     'description' => ['required', 'min:10'],
        // ],[
        //     'title.required' => 'Overrided Required Message',
        //     'title.min' => 'Changed the min rule default message for title'
        // ]);

        //fetch request data
        $requestData = request()->all();
        // dd($requestData);

        //store request data in db
        // Post::create([
        //     'title' => $requestData['title'],
        //     'description' => $requestData['description'],
        //     'user_id' => $requestData['post_creator']
        // ]);

        Post::create($requestData);

        //redirection to posts.index
        // return to_route('posts.index'); in laravel 9 only
        return redirect()->route('posts.index');
    }
}
