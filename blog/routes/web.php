<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

// Route::get('/posts/create', [PostController::class, 'create'])
// ->name('posts.create');
// Route::post('/posts', [PostController::class, 'store'])
// ->name('posts.store');

// Route::get('/posts/{post}', [PostController::class, 'show'])
// ->name('posts.show');

// Route::get('/posts/{post}/edit', [PostController::class, 'edit'])
// ->name('posts.edit');

// Route::put('/posts/{post}', [PostController::class, 'update'])
// ->name('posts.update');

// Route::delete('/posts/{post}', [PostController::class, 'destroy'])
// ->name('posts.destroy');
// // Route::get('/posts/{post}/{category?}',function($post, $category){
// //     if($category){
// //         return "Has accedido al articulo {$post} de la categoria {$category}";
// //     }
// //     return "Has accedido al articulo {$post}";
// // });

// // Route::get('/posts/{post}/{category}',function($post, $category){
// //     return "Has accedido al articulo {$post} de la categoria {$category}";
// // });

// Route::get('prueba', function(){

//     // Crear un nuevo post;
//     // $post = new Post;

//     // $post->title = 'Titulo de prueba3';
//     // $post->content = 'Contenido de prueba3';
//     // $post->categoria = 'categoria de prueba3';

//     // $post->save();

//     // return $post;

//     // $post= Post::find(1);

//     // Actualizar registro
//     // $post = Post::where('title','Titulo de prueba1')->first();

//     // $post->categoria = "Dessarrollo web";
//     // $post->save();
//     // return $post;

//     // $post = Post::all();
//     // return $post;

//     // $post = Post::orderBy('categoria','asc')->select('id','title','categoria')
//     // ->take(2)
//     // ->get();


//     // $post=Post::find(1);
//     // $post->delete();
//     // return "Eliminado correctamente";

//     $post = Post::find(1);
//     dd($post->is_active);
// });

// Route::resource('posts', PostController::class)
// ->except(['destroy','edit']);

// Route::resource('posts', PostController::class)
// ->only(['index','show']);

Route::resource('posts', PostController::class);