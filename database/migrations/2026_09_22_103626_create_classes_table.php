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
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('nom_classe');
            $table->enum('niveau', ['6', '5', '4', '3']);
            $table->unsignedInteger('effectif_max');
            $table->foreignId('annee_scolaire_id')
                  ->constrained('annee_scolaires')
                  ->cascadeOnDelete();
            $table->unique(['annee_scolaire_id', 'nom_classe']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
