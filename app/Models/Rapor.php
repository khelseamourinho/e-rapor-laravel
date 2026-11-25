<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rapor extends Model
{
  use HasFactory;

  protected $table = 'rapor';
  protected $fillable = ['slug', 'kelas', 'semester', 'tahun_ajaran', 'nilai'];
}
