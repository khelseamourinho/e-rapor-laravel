<?php

namespace App\Models;

use Illuminate\Support\Arr;


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

    public static function find($slug) : Array {
        $rapor = Arr::first(static::all(), fn ($rapor) => $rapor['slug'] == $slug );
        
        if (! $rapor){
            abort(404);
        };
        return $rapor;

    }
}
