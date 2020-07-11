@extends('layout')
@section('content')
    <form action="{{ url("/updatepost/". "$post->post_id") }}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="userid" value="{{Auth::user()->id}}" >
        <div class="form-group col-8">
            <label for="">Post Title</label>
            <input type="text" class="form-control" name="title" value="{{$post->title}}" >
            <small id="emailHelp" class="form-text text-muted">At least 5 characters</small>
        </div>
        <br>
        <br>
        <div class="form-group col-8">
            <label for="">Post Content</label>
            <input type="text" class="form-control" name="content" rows="3" value="{{$post->content}}"></input>
            <small id="emailHelp" class="form-text text-muted">At least 10 characters</small>
        </div>
        <br>
        <br>
        <div class="form-group col-8">
            <label for="">Post Category</label>
            <select  class="form-control" name="cat_id" >
                <option >Choosen ...</option>
                @foreach($cat as $category)
                    <option value="{{$category->cat_id}}"  @if($category->cat_id == $post->post_cat) selected @endif >{{$category->cat_name}}</option>
                @endforeach
            </select>
            <small id="emailHelp" class="form-text text-muted"> Choose a Category </small>
        </div>
        <br>
        <br>
        <div class="col-8">
            <label for="">Post Image</label>
            <input type="file" name="img" >
            <small class="form-text text-muted">Available Extention : jpg,jpeg,png,gif</small>
        </div>
        <br>
        <br>
        <button  type="submit" class="btn btn-primary m-md-4">Submit</button>
        <div class="col-4">
            @foreach($errors->all() as $err)
                <div class="alert alert-danger mt-4">
                    {{ $err }}
                </div>
            @endforeach

        </div>
    </form>
@endsection