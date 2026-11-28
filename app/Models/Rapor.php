<?php

namespace App\Models;

use App\Models\Guru;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Rapor extends Model
{
  use HasFactory;

  protected $with = ['wali'];
  protected $table = 'rapor';
  protected $fillable = ['slug', 'kelas', 'semester', 'tahun_ajaran', 'nilai'];

  public function wali(): BelongsTo
  {
    return $this->belongsTo(Guru::class, 'wali_id', 'id_guru');
  }
}
