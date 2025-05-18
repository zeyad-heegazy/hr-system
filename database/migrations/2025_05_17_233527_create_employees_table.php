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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->float('rating')->default(0);
            $table->string('employeeId')->unique();
            $table->string('user_name')->unique();
            $table->string('phone')->unique();
            $table->unsignedBigInteger('department_id');
            $table->string('designation');
            $table->string('description')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->date('joining_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('departments')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};
