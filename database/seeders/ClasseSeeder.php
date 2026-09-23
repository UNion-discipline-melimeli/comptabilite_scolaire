<?php

namespace Database\Seeders;

use App\Models\AnneeScolaire;
use App\Models\Classe;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClasseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $annee = AnneeScolaire::where('libelle', '2026-2027')->firstOrFail();

        Classe::create([
            'nom_classe' => '6e A',
            'niveau' => '6',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '6e B',
            'niveau' => '6',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '5e A',
            'niveau' => '5',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '5e B',
            'niveau' => '5',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '4e A',
            'niveau' => '4',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '4e B',
            'niveau' => '4',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '3e A',
            'niveau' => '3',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);

        Classe::create([
            'nom_classe' => '3e B',
            'niveau' => '3',
            'effectif_max' => 40,
            'annee_scolaire_id' => $annee->id,
        ]);
    }
}
