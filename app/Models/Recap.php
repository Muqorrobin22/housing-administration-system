<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recap extends Model
{
    use HasFactory;

    protected $table = "recap_data";

    protected $fillable = [
        'month_payment_id',
        'pemilik_rumah_id',
        'rumah_id',
        // Add other columns that can be mass-assigned
    ];

    public function monthPayment()
    {
        return $this->belongsTo(MonthlyPayments::class, 'month_payment_id');
    }

    public function pemilikRumah()
    {
        return $this->belongsTo(PemilikRumah::class, 'pemilik_rumah_id');
    }

    public function rumah()
    {
        return $this->belongsTo(Perumahan::class, 'rumah_id');
    }
}
