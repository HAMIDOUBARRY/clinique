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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
           
            $table->string('situation_familiale');
            $table->boolean('assurance_medicale')->nullable();
            $table->string('code_assurance')->nullable();
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('tel_prevenir');

            $table->foreignId('provenance_id')->constrained('provenances');
    
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('patients', function (Blueprint $table) {
            $table->dropForeign('provenance_id');
        });
        Schema::dropIfExists('patients');
    }
};
