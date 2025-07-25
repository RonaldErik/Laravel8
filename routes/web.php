<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('posts', [
        'posts' => Post::latest()->get()
    ]);
});


Route::get('posts/{post:slug}', function (Post $post) {
    return view('post', [
    'post' => $post
   ]);
});

Route::get('categories/{category:slug}', function (Category $category) {
    return view('posts', [
        'posts' => $category->posts
    ]);
});

Route::get('authors/{author:username}', function (\App\Models\User $author) {
  return view('posts', [
      'posts' => $author->posts
  ]);
});

