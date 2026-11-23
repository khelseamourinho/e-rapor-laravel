<?php

namespace App\Models;

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
};
