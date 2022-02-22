<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();

        return PostResource::collection($posts);
    }

    public function show($postId)
    {
        $post = Post::find($postId);

        return new PostResource($post);
    }

    public function store(StorePostRequest $request)
    {
        //fetch request data
        $requestData = request()->all();
        // dd($requestData);

        //store request data in db
        // Post::create([
        //     'title' => $requestData['title'],
        //     'description' => $requestData['description'],
        //     'user_id' => $requestData['post_creator']
        // ]);

        $post = Post::create($requestData);

        return new PostResource($post);
    }
}
