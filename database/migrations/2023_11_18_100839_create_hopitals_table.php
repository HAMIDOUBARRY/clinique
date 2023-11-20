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
        Schema::create('hopitals', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('adresse');
            $table->string('rue');
            $table->string('telephone')->unique();
            $table->string('email')->unique();
            $table->foreignId('service_id')->constrained('services');
            $table->timestamps();
        });
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('hopitals', function (Blueprint $table) {
            $table->dropForeign('service_id');
        });
        Schema::dropIfExists('hopitals');
    }
};
