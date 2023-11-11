<?php

namespace Database\Seeders;

use App\Models\Perumahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PerumahanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Perumahan::create([
        //     "nama_rumah" => "Rumah Mewah",
        //     "no_rumah" => 101,
        //     "is_occupied"=> true,
        //     "created_at"=> date("Y-m-d H:i:s"),
        //     "updated_at"=> date("Y-m-d H:i:s"),
        // ]);

        DB::table('perumahan')->insert([
            ["nama_rumah" => "Rumah Mewah 1", "no_rumah" => 1, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 2", "no_rumah" => 2, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 3", "no_rumah" => 3, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 4", "no_rumah" => 4, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 5", "no_rumah" => 5, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 6", "no_rumah" => 6, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 7", "no_rumah" => 7, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 8", "no_rumah" => 8, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 9", "no_rumah" => 9, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 10", "no_rumah" => 10, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 11", "no_rumah" => 11, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 12", "no_rumah" => 12, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 13", "no_rumah" => 13, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 14", "no_rumah" => 14, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 15", "no_rumah" => 15, "is_occupied" => true, "created_at" => now(), "updated_at" => now()],
        ]);
        
        // Seeder untuk 5 rumah kosong
        DB::table('perumahan')->insert([
            ["nama_rumah" => "Rumah Mewah 16", "no_rumah" => 16, "is_occupied" => false, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 17", "no_rumah" => 17, "is_occupied" => false, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 18", "no_rumah" => 18, "is_occupied" => false, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 19", "no_rumah" => 19, "is_occupied" => false, "created_at" => now(), "updated_at" => now()],
            ["nama_rumah" => "Rumah Mewah 20", "no_rumah" => 20, "is_occupied" => false, "created_at" => now(), "updated_at" => now()],
        ]);
        
        
    }
}
