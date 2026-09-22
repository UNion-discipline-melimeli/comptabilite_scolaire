<?php

namespace App\Models;

use App\Models\Alerte;
use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    protected $fillable = [
        'date_inscription',
        'montant_du',
        'date_echeance',
        'statut_inscription',
        'eleve_id',
        'classe_id',
        'frais_scolarite_id',
        'annee_scolaire_id',
    ];

    protected $casts = [
        'date_inscription' => 'date',
        'montant_du' => 'decimal:2',
        'date_echeance' => 'date',
    ];

    public function eleve()
    {
        return $this->belongsTo(Eleve::class);
    }

    public function classe()
    {
        return $this->belongsTo(Classe::class);
    }

    public function fraisScolarite()
    {
        return $this->belongsTo(FraisScolarite::class);
    }

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }

    public function alertes()
    {
        return $this->hasMany(Alerte::class);
    }
}
