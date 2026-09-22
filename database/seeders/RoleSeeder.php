<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'libelle_role' => 'Agent comptable',
            'description' => 'Enregistre les paiements, gère les reçus et consulte l’historique des opérations.',
        ]);

        Role::create([
            'libelle_role' => 'Chef d’établissement',
            'description' => 'Supervise les encaissements, consulte les statistiques et suit la situation financière de l’établissement.',
        ]);
    }
}
