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
        Schema::create('chambre_hospitalisation', function (Blueprint $table) {
            $table->id();
            $table->date('date_attribution');
            $table->date('date_liberation');
            $table->foreignId('chambre_id')->constrained('chambres');
            $table->foreignId('hospitalisation_id')->constrained('hospitalisations');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('chambre_hospitalisation', function (Blueprint $table) {
            $table->dropForeign(['chambre_id', 'hospitalisation_id']);
          
         });
        Schema::dropIfExists('chambre_hospitalisation');
    }
};
