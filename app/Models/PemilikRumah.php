<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemilikRumah extends Model
{
    use HasFactory;


    protected $table = "pemilik_rumah";

    protected $fillable = ['nama_lengkap', 'rumah_id'];

    public function perumahan()
    {
        return $this->belongsTo(Perumahan::class, 'rumah_id');
    }

}
