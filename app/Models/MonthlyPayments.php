<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyPayments extends Model
{
    use HasFactory;

    protected $fillable = ['category', 'is_paid', 'rumah_id'];


    public function perumahan()
    {
        return $this->belongsTo(Perumahan::class, 'rumah_id');
    }
    
}
