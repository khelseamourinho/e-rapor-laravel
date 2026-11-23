<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
});

Route::get('/kelola_rapor', function () {
    return view('kelola_rapor', ['title' => 'Kelola Rapor']);
});

Route::get('/daftar_rapor', function () {
    return view('daftar_rapor', ['title' => 'Daftar Rapor', 'daftar_rapor' => [
        [
            'id' => 1,
            'tahun_ajaran' => '2025/2026',
            'kelas' => 1,
            'semester' => 'Ganjil',
            'nilai' => [80, 85, 90],
        ],
        [
            'id' => 2,
            'tahun_ajaran' => '2025/2026',
            'kelas' => 1,
            'semester' => 'Genap',
            'nilai' => [85, 90, 95],
        ],
    ]]);
});

Route::get('/rapor/{id}', function ($id) {
    
    $daftar_rapor = [
                [
            'id' => 1,
            'tahun_ajaran' => '2025/2026',
            'kelas' => 1,
            'semester' => 'Ganjil',
            'nilai' => [80, 85, 90],
        ],
        [
            'id' => 2,
            'tahun_ajaran' => '2025/2026',
            'kelas' => 1,
            'semester' => 'Genap',
            'nilai' => [85, 90, 95],
        ]
    ];

    $rapor = Arr::first($daftar_rapor, function ($rapor) use ($id) {
        return $rapor['id'] == $id;
    });
    
    return view('rapor', ['title' => 'Rapor', 'rapor' => $rapor]);
});

Route::get('/app', function () {
    return view('app');
});