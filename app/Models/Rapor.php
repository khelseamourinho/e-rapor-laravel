<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rapor extends Model
{
  protected $table = 'rapor';
  protected $fillable = ['slug', 'kelas', 'semester', 'tahun_ajaran', 'nilai'];
}
