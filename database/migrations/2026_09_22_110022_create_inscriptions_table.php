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
        Schema::create('inscriptions', function (Blueprint $table) {
            $table->id();

            $table->date('date_inscription');
            $table->decimal('montant_du', 12, 2);
            $table->date('date_echeance');
            $table->enum('statut_inscription', [
                            'EN_COURS',
                            'SOLDE',
                            'IMPAYE'
                        ])->default('EN_COURS');

            $table->foreignId('eleve_id')
                  ->constrained('eleves')
                  ->cascadeOnDelete();

            $table->foreignId('classe_id')
                  ->constrained('classes')
                  ->restrictOnDelete();

            $table->foreignId('frais_scolarite_id')
                  ->constrained('frais_scolarites')
                  ->restrictOnDelete();

            $table->foreignId('annee_scolaire_id')
                  ->constrained('annee_scolaires')
                  ->restrictOnDelete();

            $table->unique(['eleve_id', 'annee_scolaire_id']);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inscriptions');
    }
};
