<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/about', function () {
    return '244107020111 - Kamila Zahwa';
});

Route::get('/user/{name}', function ($name) {
    return 'Nama saya ' . $name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Post ke-: ' . $postId . ' Komentar ke-: ' . $commentId;
});

Route::get('/articles/{id}', function ($articleId) {
    return 'Halaman Artikel dengan ID ' . $articleId;
});
});
