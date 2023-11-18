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
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('type_admission');
            $table->string('motif');
            $table->string('nomprenom_acc');
            $table->string('lien_parente');
            $table->date('date_sortie');
            $table->string('motif_sortie');
            $table->string('resultat_sortie');
            $table->date('date_deces')->nullable();
            $table->string('motif_deces')->nullable();
            $table->foreignId('medecin_id')->constrained('medecins');
            $table->foreignId('patient_id')->constrained('patients');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hospitalisations', function (Blueprint $table) {
            $table->dropForeign(['medecin_id', 'patient_id']);
        });
        Schema::dropIfExists('hospitalisations');
    }
};
