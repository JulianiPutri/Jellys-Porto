<?php

use App\Http\Controllers\JellyController;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});
Route::get('/about', [JellyController::class, 'index'])->name('about');
// Route::get('/posts', function () {
//     return view('posts', [
//         'title' => 'Blog', 
//         'posts'=>[

//             [
//                 'id' => 1,
//                 'slug' => 'judul-artikel-1',
//                 'title' => 'Judul Artikel 1',
//                 'author' => 'Juliani Putri',
//                 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
//                     Error reiciendis at veniam iure, consectetur ad quam debitis 
//                     aperiam minus vero sequi dolorum! Vero ducimus non debitis, magni iste dolore velit.'
//             ],
//             [
//                 'id' => 2,
//                 'slug' => 'judul-artikel-2',
//                 'title' => 'Judul Artikel 1',
//                 'author' => 'Juliani Putri',
//                 'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
//                     Error reiciendis at veniam iure, consectetur ad quam debitis 
//                     aperiam minus vero sequi dolorum! Vero ducimus non debitis, magni iste dolore velit.'
    
//             ]   
//         ]
//     ]);
// });

// Route::get('/posts/{slug}', function($slug){
//     $posts = [
//         [
//             'id' => 1,
//             'slug' => 'judul-artikel-1',
//             'title' => 'Judul Artikel 1',
//             'author' => 'Juliani Putri',
//             'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
//                 Error reiciendis at veniam iure, consectetur ad quam debitis 
//                 aperiam minus vero sequi dolorum! Vero ducimus non debitis, magni iste dolore velit.'
//         ],
//         [
//             'id' => 2,
//             'slug' => 'judul-artikel-2',
//             'title' => 'Judul Artikel 1',
//             'author' => 'Juliani Putri',
//             'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
//                 Error reiciendis at veniam iure, consectetur ad quam debitis 
//                 aperiam minus vero sequi dolorum! Vero ducimus non debitis, magni iste dolore velit.'

//         ]  
//     ];
//     // boleh pkek id atau slug
//     // mencocokan id dari arr dengan id yg dikirimkan
//     $post = Arr::first($posts, function($post) use ($slug){
//         return $post['slug'] == $slug;
//     });

//     // dd($post);


//     return view('post',['title' => 'Single Post', 'post' => $post]);

// });

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
