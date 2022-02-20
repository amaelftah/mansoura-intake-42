@extends('layouts.app')

@section('title') Index @endsection

@section('content')
        <div class="text-center mt-5">
            <a href="{{route('posts.create')}}" class="btn btn-success ">Create Post</a>

        </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
              {{-- @dd($post->user,$post->user()) --}}
              {{-- @dd($post->user,$post->changedName) --}}
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->user ? $post->user->name : 'Not Found'}}</td>
                    <td>{{$post->created_at}}</td>
                    <td><a href="{{route('posts.show', $post->id)}}" class="btn btn-info">View</a></td>
                </tr>
            @endforeach
            </tbody>
          </table>
@endsection
