@extends('layout')
@section('content')
    @foreach($posts as $post)
    <div class="card col-8 m-md-4">
        <img class="card-img-top" src="{{Storage::disk('local')->url($post->img)}}" height="200">
        <div class="card-body">
            <h5 class="card-title">{{$post->title}}</h5>
            <p class="card-text">{{$post->content}}</p>
            <br>
           <br>
            @guest()
                <a href="{{ url('/comments/'."$post->post_id")}}">View Old Comments</a>
            <br>
            <br>
                <form action="{{ url("/addcomment/" . "$post->post_id") }}" method="POST" class="col-4" enctype="multipart/form-data" >
                    {{ csrf_field() }}
                    <input type="hidden" name="postid" value="{{$post->post_id}}">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Add Comment</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" name="content" value="">
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Post</button>
                </form>
            @else
                <a href="{{ url('editpost/'. $post->post_id) }}">Edit</a>
                <br>
                <br>
                <a href="{{ url('deletepost/'. $post->post_id) }}">Delete</a>
            @endguest

        </div>
    </div>
    <br>
    <br>
    <br>
    @endforeach
    {{ $posts->links() }}
@endsection