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
        Schema::create('frais_scolarites', function (Blueprint $table) {
            $table->id();
            $table->enum('niveau', ['6', '5', '4', '3']);
            $table->decimal('montant_total', 12, 2);
            $table->foreignId('annee_scolaire_id')
                  ->constrained('annee_scolaires')
                  ->cascadeOnDelete();
            $table->unique(['annee_scolaire_id', 'niveau']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frais_scolarites');
    }
};
