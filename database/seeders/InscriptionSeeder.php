<?php

namespace Database\Seeders;

use App\Models\AnneeScolaire;
use App\Models\Classe;
use App\Models\Eleve;
use App\Models\FraisScolarite;
use App\Models\Inscription;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $annee = AnneeScolaire::where('libelle', '2026-2027')->firstOrFail();

        $eleves = Eleve::orderBy('id')->get();

        $classes = Classe::where('annee_scolaire_id', $annee->id)
            ->orderBy('id')
            ->get();

        foreach ($classes as $index => $classe) {
            $frais = FraisScolarite::where('annee_scolaire_id', $annee->id)
                ->where('niveau', $classe->niveau)
                ->firstOrFail();
            
        $elevesDeLaClasse = $eleves->slice($index * 2, 2);

            foreach ($elevesDeLaClasse as $eleve) {
                Inscription::create([
                    'date_inscription' => '2026-09-01',
                    'montant_du' => $frais->montant_total,
                    'date_echeance' => '2027-07-31',
                    'statut_inscription' => 'EN_COURS',
                    'eleve_id' => $eleve->id,
                    'classe_id' => $classe->id,
                    'frais_scolarite_id' => $frais->id,
                    'annee_scolaire_id' => $annee->id,
                ]);
            }
        }
    }
}
