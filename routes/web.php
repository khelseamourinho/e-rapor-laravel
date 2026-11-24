<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Rapor;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/kelola_rapor', function () {
    return view('kelola_rapor', ['title' => 'Kelola Rapor']);
});

Route::get('/daftar_rapor', function () {
    return view('daftar_rapor', ['title' => 'Daftar Rapor', 'daftar_rapor' => Rapor::all() ]);
});

Route::get('/rapor/{rapor:slug}', function (Rapor $rapor) {
    // $rapor = Rapor::find($id);
    return view('rapor', ['title' => 'Detail Rapor', 'rapor' => $rapor]);
});

// Route::get('/rapor/{slug}', function ($slug) {
//     $rapor = Rapor::where('slug', $slug)->firstOrFail();

//     return view('rapor', ['title' => 'Rapor', 'rapor' => $rapor]);
// });

Route::get('/app', function () {
    return view('app');
});