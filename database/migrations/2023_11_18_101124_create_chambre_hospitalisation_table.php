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
            $table->date('date_attrib');
            $table->date('date_liberation');
            $table->unsignedBigInteger('chambre_id');
            $table->unsignedBigInteger('hospitalisation_id');

            $table->foreign('chambre_id')->references('id')->on('chambres')->onDelete('cascade');
            $table->foreign('hospitalisation_id')->references('id')->on('hospitalisations')->onDelete('cascade');

            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chambre_hospitalisation');
    }
};
