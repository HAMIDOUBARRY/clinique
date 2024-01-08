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
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('debut');
            $table->time('fin');
            $table->string('synthese');

            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('medecin_id')->constrained('medecins')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('typeconsultation_id')->constrained('typeconsultations');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('consultations', function (Blueprint $table) {
            $table->dropForeign(['patient_id','medecin_id', 'typeconsultation_id']);
        });
        Schema::dropIfExists('consultations');
    }
};
