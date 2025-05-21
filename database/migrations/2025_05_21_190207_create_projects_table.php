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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->text('description')->nullable();
            $table->json('files')->nullable();
            $table->string('icon')->nullable();
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('lead_employee_id');
            $table->decimal('budget', 8, 2);
            $table->string('status');
            $table->string('priority');
            $table->timestamps();
            $table->foreign('lead_employee_id')->references('id')->on('employees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
