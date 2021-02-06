<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function addPost()
    {
        return view('add-post');
    }

    public function createPost(Request $req)
    {
        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
        return back()->with('post-created','Post Created Successfully!');
    }

    public function getPost(Request $req)
    {
        //return view('showData',['users'=>$data]);
        $posts = Post::orderby('id','DESC')->get();
        return view('posts',compact('posts'));
    }

    public function getPostById($id)
    {
        $post = Post::where('id',$id)->first();
        return view('single-post',compact('post'));
    }

    public function postDelete($id)
    {
        $post = Post::where('id',$id)->delete();
        return back()->with('post_deleted','Post deleted Successfully!');
    }

    public function postEdit($id)
    {
        $post = Post::find($id);
        return view('edit-post',compact('post'));
    }

    public function updatePost(Request $req)
    {
        $post =Post::find($req->id);
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();
        return back()->with('post-updated','Post Updated Successfully!');
    }
}
