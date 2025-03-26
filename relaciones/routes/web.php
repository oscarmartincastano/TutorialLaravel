<?php

use App\Models\Phone;
use App\Models\Post;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('prueba', function () {
    // $user = User::where('id', 1)
    //         ->with('phone')
    //         ->first();

    // return $user;

    // $phone = Phone::find(1);
    // return $phone->user;

    // $post = Post::find(2);
    // return $post->comments;

    // $comment = Comment::find(1);
    // return $comment->post;

    // $post = Post::find(2);
    // $post->comments()->create([
    //     'content' => 'Este es un comentario de prueba del post 2'
    // ]);

    // return 'Comentario creado';

    // $post = Post::find(1);

    // $post->tags()->attach([1, 2]);
    // $post->tags()->sync([1, 2]);
    // $post->tags()->detach([2]);

    // return $post->tags;

    // $user = User::find(1);

    // return $user->phone;
    // $user->phone()->create([
    //     'number' => '123456789',
    // ]);

    // Phone::create([
    //     'number' => '123456789',
    //     'phoneable_id' => $user->id,
    //     'phoneable_type' => User::class
    // ]);

    // $post = Post::find(1);

    // $post->comments()->create([
    //     'content' => 'Este es un comentario de prueba del post 1'
    // ]);
    // Comment::create([
    //     'content' => 'Este es un comentario de prueba del post 1',
    //     'commentable_id' => $post->id,
    //     'commentable_type' => Post::class
    // ]);

    // 
    
    $post = Post::find(1);

    $post->tags()->attach([1, 2, 3]);
    $post->tags()->detach([1]);
});