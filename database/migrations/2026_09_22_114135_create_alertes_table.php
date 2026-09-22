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
        Schema::create('alertes', function (Blueprint $table) {
            $table->id();
            $table->enum('type_alerte', [
                         'IMPAYE',
                         'ECHEANCE',
                         'RETARD'
                        ]);

            $table->text('message');
            $table->date('date_alerte');
            $table->boolean('lue')->default(false);

            $table->foreignId('inscription_id')
                  ->constrained('inscriptions')
                  ->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alertes');
    }
};
