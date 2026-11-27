<?php

namespace App\Models;

use App\Models\Rapor;
use App\Models\User;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Guru extends Model
{
    /** @use HasFactory<\Database\Factories\GuruFactory> */
    use HasFactory;
    // protected $table = 'guru';

    // public $incrementing = false;

    protected $fillable = ['name', 'nuptk', 'nip', 'status'];
    protected $primaryKey = 'id_guru';

    // public function guru(): HasOne
    // {
    //     return $this->hasOne(User::class);
    // }

    public function rapor(): HasMany
    {
        return $this->hasMany(Rapor::class, 'wali_id', 'id_guru');
    }


}


