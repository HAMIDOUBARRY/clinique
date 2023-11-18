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
        Schema::create('rendezvouses', function (Blueprint $table) {
            $table->id();
            
            $table->date('date');
            
            $table->foreignId('patient_id')->constrained('patients');
            $table->foreignId('service_id')->constrained('services');
            $table->foreignId('medecin_id')->constrained('medecins');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('rendezvouses', function (Blueprint $table) {
            $table->dropForeign(['patient_id', 'medecin_id','service_id']);
        });
        Schema::dropIfExists('rendezvouses');
    }
};
