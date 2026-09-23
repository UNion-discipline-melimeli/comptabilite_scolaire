<?php

namespace Database\Seeders;

use App\Models\Eleve;
use Illuminate\Database\Seeder;

class EleveSeeder extends Seeder
{
    public function run(): void
    {
        Eleve::create([
            'matricule' => 'ELV2026001',
            'nom_eleve' => 'Kouassi',
            'prenom_eleve' => 'Jean',
            'date_naiss_eleve' => '2014-03-15',
            'genre_eleve' => 'M',
            'nom_parent' => 'Kouassi Paul',
            'contact_parent' => '0700000001',
            'email_parent' => 'paul.kouassi@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026002',
            'nom_eleve' => 'Yao',
            'prenom_eleve' => 'Marie',
            'date_naiss_eleve' => '2014-07-22',
            'genre_eleve' => 'F',
            'nom_parent' => 'Yao Michel',
            'contact_parent' => '0700000002',
            'email_parent' => 'michel.yao@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026003',
            'nom_eleve' => 'N’Guessan',
            'prenom_eleve' => 'David',
            'date_naiss_eleve' => '2013-05-10',
            'genre_eleve' => 'M',
            'nom_parent' => 'N’Guessan Alain',
            'contact_parent' => '0700000003',
            'email_parent' => 'alain.nguessan@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026004',
            'nom_eleve' => 'Bamba',
            'prenom_eleve' => 'Aïcha',
            'date_naiss_eleve' => '2013-11-08',
            'genre_eleve' => 'F',
            'nom_parent' => 'Bamba Ibrahim',
            'contact_parent' => '0700000004',
            'email_parent' => 'ibrahim.bamba@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026005',
            'nom_eleve' => 'Koffi',
            'prenom_eleve' => 'Samuel',
            'date_naiss_eleve' => '2012-02-19',
            'genre_eleve' => 'M',
            'nom_parent' => 'Koffi André',
            'contact_parent' => '0700000005',
            'email_parent' => 'andre.koffi@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026006',
            'nom_eleve' => 'Traoré',
            'prenom_eleve' => 'Fatou',
            'date_naiss_eleve' => '2012-09-27',
            'genre_eleve' => 'F',
            'nom_parent' => 'Traoré Mamadou',
            'contact_parent' => '0700000006',
            'email_parent' => 'mam.tr@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026007',
            'nom_eleve' => 'Kouadio',
            'prenom_eleve' => 'Emmanuel',
            'date_naiss_eleve' => '2011-04-12',
            'genre_eleve' => 'M',
            'nom_parent' => 'Kouadio Bernard',
            'contact_parent' => '0700000007',
            'email_parent' => 'bernard.kouadio@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026008',
            'nom_eleve' => 'Aka',
            'prenom_eleve' => 'Grâce',
            'date_naiss_eleve' => '2011-12-05',
            'genre_eleve' => 'F',
            'nom_parent' => 'Aka Joseph',
            'contact_parent' => '0700000008',
            'email_parent' => 'joseph.aka@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026009',
            'nom_eleve' => 'Adjoua',
            'prenom_eleve' => 'Kevin',
            'date_naiss_eleve' => '2010-06-18',
            'genre_eleve' => 'M',
            'nom_parent' => 'Adjoua Serge',
            'contact_parent' => '0700000009',
            'email_parent' => 'serge.adjoua@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026010',
            'nom_eleve' => 'Ouattara',
            'prenom_eleve' => 'Nadia',
            'date_naiss_eleve' => '2010-10-24',
            'genre_eleve' => 'F',
            'nom_parent' => 'Ouattara Karim',
            'contact_parent' => '0700000010',
            'email_parent' => 'karim.ouattara@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026011',
            'nom_eleve' => 'Kouamé',
            'prenom_eleve' => 'Franck',
            'date_naiss_eleve' => '2009-03-09',
            'genre_eleve' => 'M',
            'nom_parent' => 'Kouamé Didier',
            'contact_parent' => '0700000011',
            'email_parent' => 'didier.kouame@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026012',
            'nom_eleve' => 'Yobouet',
            'prenom_eleve' => 'Estelle',
            'date_naiss_eleve' => '2009-08-16',
            'genre_eleve' => 'F',
            'nom_parent' => 'Yobouet Richard',
            'contact_parent' => '0700000012',
            'email_parent' => 'richard.yobouet@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026013',
            'nom_eleve' => 'Diallo',
            'prenom_eleve' => 'Moussa',
            'date_naiss_eleve' => '2008-01-25',
            'genre_eleve' => 'M',
            'nom_parent' => 'Diallo Oumar',
            'contact_parent' => '0700000013',
            'email_parent' => 'oumar.diallo@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026014',
            'nom_eleve' => 'Kra',
            'prenom_eleve' => 'Clarisse',
            'date_naiss_eleve' => '2008-05-30',
            'genre_eleve' => 'F',
            'nom_parent' => 'Kra François',
            'contact_parent' => '0700000014',
            'email_parent' => 'francois.kra@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026015',
            'nom_eleve' => 'Soro',
            'prenom_eleve' => 'Mohamed',
            'date_naiss_eleve' => '2008-09-14',
            'genre_eleve' => 'M',
            'nom_parent' => 'Soro Ibrahim',
            'contact_parent' => '0700000015',
            'email_parent' => 'ibrahim.soro@example.com',
        ]);

        Eleve::create([
            'matricule' => 'ELV2026016',
            'nom_eleve' => 'Amani',
            'prenom_eleve' => 'Sarah',
            'date_naiss_eleve' => '2008-12-21',
            'genre_eleve' => 'F',
            'nom_parent' => 'Amani Jean',
            'contact_parent' => '0700000016',
            'email_parent' => 'jean.amani@example.com',
        ]);
    }
}