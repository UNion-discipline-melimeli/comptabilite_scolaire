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
        Schema::create('paiements', function (Blueprint $table) {
            $table->id();

            $table->date('date_paiement');
            $table->decimal('montant', 12, 2);

            $table->enum('mode_paiement', [
                            'ESPECES',
                            'CHEQUE',
                            'VIREMENT'
                        ]);

            $table->string('reference')->nullable();

            $table->enum('statut', [
                            'VALIDE',
                            'ANNULE'
                        ])->default('VALIDE');

            $table->text('observation')->nullable();
            $table->foreignId('inscription_id')
                ->constrained('inscriptions')
                ->restrictOnDelete();

            $table->foreignId('user_id')
                    ->constrained('users')
                    ->restrictOnDelete();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paiements');
    }
};
