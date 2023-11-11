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
        Schema::create("monthly_payments", function(Blueprint $table) {
            $table->id();
            $table->string("category", 100);
            $table->boolean("is_paid")->default(false);
            $table->unsignedBigInteger("rumah_id");
            $table->foreign("rumah_id")->references("id")->on("perumahan");
            $table->timestamps();
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
