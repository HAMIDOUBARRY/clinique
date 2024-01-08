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
        Schema::create('traitements', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->foreignId('hopital_id')->constrained('hopitals')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('hospitalisation_id')->constrained('hospitalisations');
             // Nouvelle colonne pour stocker le type d'examen
            $table->string('type_examen');

            $table->double('prix');

            // Champs spécifiques à l'examen de biologie
            $table->string('groupe_sanguin')->nullable();
            $table->string('litre_sang')->nullable();
            $table->string('resultat_examen')->nullable();

            // Champs spécifiques à l'examen de radiologie
            $table->string('resultat_radiologie')->nullable();
            $table->string('image_radiologie')->nullable();

            // Champs spécifiques à la chirurgie
            $table->string('anesthesie')->nullable();
            $table->timestamps();

        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('traitements', function (Blueprint $table) {
            $table->dropForeign(['hospitalisation_id','hopital_id']);
        });
        Schema::dropIfExists('traitements');
    }
};
