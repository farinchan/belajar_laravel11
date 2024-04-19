<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    $blog_posts = [
        ['title' => 'Post 1', 'slug' => 'post-1', 'author' => 'Fajri Rinaldi Chan', 'content' => 'This is the first post'],
        ['title' => 'Post 2', 'slug' => 'post-2', 'author' => 'jhon doe', 'content' => 'This is the second post'],
        ['title' => 'Post 3', 'slug' => 'post-3', 'author' => 'jhon doe', 'content' => 'This is the third post'],
        ['title' => 'Post 4', 'slug' => 'post-4', 'author' => 'jhon doe', 'content' => 'This is the fourth post'],
        ['title' => 'Post 5', 'slug' => 'post-5', 'author' => 'jhon doe', 'content' => 'This is the fifth post'],
    ];
    return view('blog.posts', ['posts' => $blog_posts]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    
    $contact = [
        'phone' => '123-456-789',
        'email' => 'jhondoe@gariskode.com',
        'address' => '123 Main St, New York, NY 10030'
    ];
    return view('contact', ['contact' => $contact]);
});
