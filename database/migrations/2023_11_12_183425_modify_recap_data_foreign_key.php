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
            $table->dropForeign(['month_payment_id']);
        });
    
        Schema::table('recap_data', function (Blueprint $table) {
            $table->foreign('month_payment_id')->references('id')->on('monthly_payments')->onDelete('cascade');
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
