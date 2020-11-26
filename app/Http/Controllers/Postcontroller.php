<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class Postcontroller extends Controller
{
    public function sendPost(Request $req){
        $post=new Post();
        $post->post=$req->post;
        $post->save();
        return redirect('dashboard');
    }

    public function index(){
        $posts=Post::all();
        return view('dashboard',['posts'=>$posts]);
    }

    public function deletePost($id){
        $post=Post::find($id);
        $post->delete();
        return redirect('dashboard');
    }

    public function editPost($id){
        $post=Post::find($id);
        return view('editpage')->with('post',$post);
    }

    public function savePost(Request $req,$id){
        $post=Post::find($id);
        $post->post=$req->post;
        $post->save();
        return redirect('dashboard');

    }
}
