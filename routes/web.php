<?php

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
            'tahun_ajaran' => '2025/2026',
            'kelas' => 1,
            'semester' => 'Ganjil',
            'nilai' => [80, 85, 90],
        ],
        [
            'tahun_ajaran' => '2025/2026',
            'kelas' => 1,
            'semester' => 'Genap',
            'nilai' => [85, 90, 95],
        ],
    ]]);
});

Route::get('/rapor', function () {
    return view('rapor', ['title' => 'Rapor']);
});

Route::get('/app', function () {
    return view('app');
});