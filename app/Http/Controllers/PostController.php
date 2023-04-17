<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
        
        $allPosts = Post::all();
        return view('posts', [
            "allPosts" => $allPosts
        ]);
   
    }

    public static function convert($data){
        
        return Carbon::parse($data)->format('m/d/Y');
    }

    public function show($id){

        //$post = Post::where('id',$id)->first();
        $post = Post::find($id);
        return view('post', [
            'post'=>$post
        ]);

    }

    public function create(){

        return view("create_post");
    }

    public function store(){

        $pureData = request()->validate([
            'title'=>'required',
            'body'=>'required',
            'autor'=>'required'
        ]);

        $post = new Post();
        $post->create($pureData);
        
        return redirect(route('home'))->with('create','Post CREATED');

    }

    public function edit(Post $post){

        
        return view("edit_post", compact('post'));
    }

    public function update(Post $post){

               
        $post->update(request()->validate([
            'title'=>'required',
            'body'=>'required',
            'name'=>'required'
        ]));

        return redirect("post/".$post->id)->with('update', 'Post UPDATED');

    }

    public function delete($id){

        $post = Post::find($id);
        $post->delete();  
        
        return redirect('/')->with('delete', 'Post DELETED');
    }
}
