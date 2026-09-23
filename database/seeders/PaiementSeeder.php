<?php

namespace Database\Seeders;

use App\Models\Inscription;
use App\Models\Paiement;
use App\Models\User;
//use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PaiementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('login', 'admin')->firstOrFail();

        $inscriptions = Inscription::orderBy('id')->get();

        Paiement::create([
            'date_paiement' => '2026-09-05',
            'montant' => 50000,
            'mode_paiement' => 'ESPECES',
            'reference' => null,
            'statut' => 'VALIDE',
            'observation' => 'Premier versement',
            'inscription_id' => $inscriptions[0]->id,
            'user_id' => $user->id,
        ]);

        Paiement::create([
            'date_paiement' => '2026-09-08',
            'montant' => 50000,
            'mode_paiement' => 'CHEQUE',
            'reference' => 'CHQ-2026-001',
            'statut' => 'VALIDE',
            'observation' => 'Versement par chèque',
            'inscription_id' => $inscriptions[1]->id,
            'user_id' => $user->id,
        ]);

        Paiement::create([
            'date_paiement' => '2026-09-10',
            'montant' => 100000,
            'mode_paiement' => 'VIREMENT',
            'reference' => 'VIR-2026-001',
            'statut' => 'VALIDE',
            'observation' => 'Versement par virement bancaire',
            'inscription_id' => $inscriptions[2]->id,
            'user_id' => $user->id,
        ]);

        Paiement::create([
            'date_paiement' => '2026-09-12',
            'montant' => 25000,
            'mode_paiement' => 'ESPECES',
            'reference' => null,
            'statut' => 'VALIDE',
            'observation' => 'Deuxième versement',
            'inscription_id' => $inscriptions[0]->id,
            'user_id' => $user->id,
        ]);

        Paiement::create([
            'date_paiement' => '2026-09-15',
            'montant' => 30000,
            'mode_paiement' => 'CHEQUE',
            'reference' => 'CHQ-2026-002',
            'statut' => 'ANNULE',
            'observation' => 'Paiement annulé',
            'inscription_id' => $inscriptions[3]->id,
            'user_id' => $user->id,
        ]);
    }
}
