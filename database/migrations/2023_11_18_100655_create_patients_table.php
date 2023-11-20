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
            $table->unsignedBigInteger('user_id');
           
            $table->string('situation_familiale');
            $table->boolean('assurance_medicale')->nullable();
            $table->string('code_assurance')->nullable();
            $table->string('nom_pere');
            $table->string('nom_mere');
            $table->string('tel_prevenir');

            $table->foreignId('provenance_id')->references('id')->on('provenances')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('patients');
    }
};
