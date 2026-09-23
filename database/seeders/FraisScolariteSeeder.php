<?php

namespace Database\Seeders;

use App\Models\AnneeScolaire;
use App\Models\FraisScolarite;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FraisScolariteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $annee = AnneeScolaire::where('libelle', '2026-2027')->firstOrFail();

        FraisScolarite::create([
            'niveau' => '6',
            'montant_total' => 100000,
            'annee_scolaire_id' => $annee->id,
        ]);

        FraisScolarite::create([
            'niveau' => '5',
            'montant_total' => 150000,
            'annee_scolaire_id' => $annee->id,
        ]);
        FraisScolarite::create([
            'niveau' => '4',
            'montant_total' => 200000,
            'annee_scolaire_id' => $annee->id,
        ]);

        FraisScolarite::create([
            'niveau' => '3',
            'montant_total' => 250000,
            'annee_scolaire_id' => $annee->id,
        ]);
    }
}
