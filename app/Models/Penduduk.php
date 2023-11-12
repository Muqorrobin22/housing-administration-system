<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penduduk extends Model
{
    use HasFactory;

    protected $table = "penduduk";

    protected $fillable = ['nama_penduduk', 'keluarga_dari'];

    public function pemilikRumah()
    {
        return $this->belongsTo(PemilikRumah::class, 'keluarga_dari');
    }
}
