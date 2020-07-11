<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Post;
use App\Category;
use Illuminate\Queue\DatabaseQueue;

class c_post extends Controller
{
    public function showpost(){
        $posts = Post::orderBy('post_id','desc')->paginate(2);
        return view('posts.post',compact('posts'));
    }

    public function addpost(){
        $cat=Category::all();
        return view('posts.addpost',compact("cat"));
    }

    public function insertpost(Request $request){

        $this->validate($request, [
            "title"    =>'required|min:5',
            "content"  =>"required|min:20",
            "cat_id"   =>"required",
            "img"      =>"required|image|mimes:jpg,jpeg,gif,png|max:2048"
        ],

          [
                "cat_id.required" => "You Should Choose a Category"

          ]);
        $addpost = new Post;
        $addpost->title     = request("title");
        $addpost->content   = request("content");
        $addpost->post_user = request("userid");
        $addpost->post_cat  = request("cat_id");
        $addpost->img       = request()->file('img')->store('public/images');
        $addpost->save();
        return redirect('/post');
    }


    public function editpost($id){
        $cat  =Category::all();
        $post =Post::find($id);
        return view('posts.editpost',compact('cat','post'));
    }

    public function updatepost($id){
        $update = Post::find($id);

        $update->title     = request("title");
        $update->content   = request("content");
        $update->post_user = request("userid");
        $update->post_cat  = request("cat_id");
        $update->img       = request()->file('img')->store('public/images');
        $update->save();
        return redirect('/post');
    }

    public function deletepost($id){
        $post=Post::where('post_id',$id)->first();
        if ($post != null) {
            $post->delete();
            return redirect('/post');
        }
        return redirect('/post');
    }

}
