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
        Schema::create('examen_biologies', function (Blueprint $table) {
            $table->id();
            $table->string('groupe_sangui');
            $table->string('litre-sang');
            $table->string('designation');
            $table->string('resultat_examen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('examen__biologies');
    }
};
