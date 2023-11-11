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
        Schema::create('recap_data', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("month_payment_id");
            $table->unsignedBigInteger("pemilik_rumah_id");
            $table->unsignedBigInteger("rumah_id");
            $table->timestamps();

            // foreign keys
            $table->foreign("month_payment_id")->references("id")->on("monthly_payments");
            $table->foreign("pemilik_rumah_id")->references("id")->on("pemilik_rumah");
            $table->foreign("rumah_id")->references("id")->on("perumahan");

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recap_data');
    }
};
