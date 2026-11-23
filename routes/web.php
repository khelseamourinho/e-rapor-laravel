<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

class Post{
    public static function all(){

        return [
            [
                'id' => 1,
                'slug' => 'ganjil-1-asep',
                'tahun_ajaran' => '2025/2026',
                'kelas' => 1,
                'semester' => 'Ganjil',
                'nilai' => [80, 85, 85],
            ],
            [
                'id' => 2,
                'slug' => 'genap-1-asep',
                'tahun_ajaran' => '2025/2026',
                'kelas' => 1,
                'semester' => 'Genap',
                'nilai' => [85, 90, 95],
            ]
            ];
    }
}

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
    $rapor = Arr::first(Post::all(), function ($rapor) use ($slug) {
        return $rapor['slug'] == $slug;
    });
    
    return view('rapor', ['title' => 'Rapor', 'rapor' => $rapor]);
});

Route::get('/app', function () {
    return view('app');
});