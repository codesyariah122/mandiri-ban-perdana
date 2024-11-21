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
        // Ubah Schema::table ke Schema::create untuk membuat tabel baru
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('employees_name');
            $table->string('employees_email');
            $table->string('employees_phone');
            $table->string('city');
            $table->string('country');
            $table->text('address');
            $table->timestamps();
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
