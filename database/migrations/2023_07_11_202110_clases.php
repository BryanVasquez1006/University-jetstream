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
        Schema::create('clases', function (Blueprint $table) {
            $table->id();
            $table->string('clase');
            $table->string('maestro');
            $table->string('alumnos_ins')->unique();
               
             
        });
            
    }

    /*
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
