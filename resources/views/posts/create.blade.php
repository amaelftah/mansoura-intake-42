@extends('layouts.app')

@section('title') Create @endsection

@section('content')
        <form class="mt-5">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Title</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Description</label>
              <textarea class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Post Creator</label>
                <select class="form-control">
                    <option value="1">Ahmed</option>
                    <option value="2">Mohamed</option>
                </select>
              </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
@endsection
