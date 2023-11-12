<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perumahan extends Model
{
    use HasFactory;

    protected $table = "perumahan";

    public function findPerumahan($id)
    {

        $perumahan = Perumahan::find($id);

        if(!$perumahan) {
            return response()->json(["message" => "Perumahan tidak ditemukan", 404]);
        }

        return response()->json($perumahan);

    }
 
}
