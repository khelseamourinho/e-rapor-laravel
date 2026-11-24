<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/kelola_rapor', function () {
    return view('kelola_rapor', ['title' => 'Kelola Rapor']);
});

Route::get('/daftar_rapor', function () {
    return view('daftar_rapor', ['title' => 'Daftar Rapor', 'daftar_rapor' => Post::all() ]);
});

Route::get('/rapor/{slug}', function ($slug) {
    $rapor = Post::find($slug);
    
    return view('rapor', ['title' => 'Rapor', 'rapor' => $rapor]);
});

Route::get('/app', function () {
    return view('app');
});