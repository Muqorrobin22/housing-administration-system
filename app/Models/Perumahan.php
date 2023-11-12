<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;

    protected $table = "perumahan";
    protected $guarded = [];
    // protected $fillable = ['nama_rumah', 'no_rumah', 'is_occupied'];

}
