<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;

class Classe extends Model
{
    protected $fillable = [
        'nom_classe',
        'niveau',
        'effectif_max',
        'annee_scolaire_id',
    ];

    protected $casts = [
        'effectif_max' => 'integer',
    ];

    public function anneeScolaire()
    {
        return $this->belongsTo(AnneeScolaire::class);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
