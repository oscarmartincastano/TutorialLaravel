<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\PostCreatedMail;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('id','desc')->paginate(10);
        return view('posts.index', compact('posts'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(StorePostRequest $request){
        // $request->validate([
        //     'title' => 'required',
        //     'slug' => 'required|unique:posts',
        //     'content' => 'required',
        //     'categoria' => 'required'
        // ]);
        $post= Post::create($request->all());
        Mail::to('prueba@prueba.com')->send(new PostCreatedMail($post));

        // Post::create([
        //     'title' => $request->title,
        //     'slug' => $request->slug,
        //     'content' => $request->content,
        //     'categoria' => $request->categoria
        // ])
        // $post = new Post();
        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->categoria = $request->categoria;
        // $post->save();
        return redirect()->route('posts.index');
    }

    public function show(Post $post){

        // $post = Post::find($post);
        return view('posts.show', compact('post'));
        // return view('posts.show',[
        //     'post' => $post
        // ]);
    }

    public function edit( Post $post){
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post){

        $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:posts,slug,{$post->id}',
            'content' => 'required',
            'categoria' => 'required'
        ]);

        $post->update($request->all());

        // $post->title = $request->title;
        // $post->slug = $request->slug;
        // $post->content = $request->content;
        // $post->categoria = $request->categoria;
        // $post->save();
        // return redirect()->route('posts.show', $post);
    } 

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('posts.index');
    }
}
