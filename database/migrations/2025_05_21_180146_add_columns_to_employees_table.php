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
        Schema::table('employees', function (Blueprint $table) {
            $table->json('experience')->nullable();
            $table->unsignedBigInteger('personal_info_id')->nullable();
            $table->unsignedBigInteger('bank_info_id')->nullable();
            $table->foreign('personal_info_id')->references('id')->on('employees_personal_info')->onDelete('set null');
            $table->foreign('bank_info_id')->references('id')->on('employees_bank_info')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            //
        });
    }
};
