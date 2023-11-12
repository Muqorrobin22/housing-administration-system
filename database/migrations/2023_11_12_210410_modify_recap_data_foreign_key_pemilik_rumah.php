<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('recap_data', function (Blueprint $table) {
            $table->dropForeign(['pemilik_rumah_id']);
        });
    
        Schema::table('recap_data', function (Blueprint $table) {
            $table->foreign('pemilik_rumah_id')->references('id')->on('pemilik_rumah')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
