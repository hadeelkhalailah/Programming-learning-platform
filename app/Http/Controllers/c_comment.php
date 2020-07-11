<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class c_comment extends Controller
{
        public function addcomment($id){
            $add = new Comment;
            $add->com_content   = request("content");
            $add->com_post    = request("postid");
            $add->save();
            return redirect("post");
        }

        public function showcomment($id){
            $comment=Comment::where('com_post',$id)->get();
            return view("comments.showcomment",compact("comment"));


        }

}
