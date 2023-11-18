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
            $table->foreignId('hopital_id')->constrained('hopitals');
            $table->foreignId('hospitalisation_id')->constrained('hospitalisations');
            $table->foreignId('examen_biologie_id')->constrained('examen_biologies');
            $table->foreignId('examen_radiologie_id')->constrained('examen_radiologies');  
            $table->foreignId('chirurgie_id')->constrained('chirurgies');  
            $table->double('prix');                      
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
            $table->dropForeign(['hospitalisation_id','hopital_id','examen_biologie_id','examen_radiologie_id','chirurgie_id']);
        });
        Schema::dropIfExists('traitements');
    }
};
