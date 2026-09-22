<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;

class FraisScolarite extends Model
{
     protected $fillable = [
        'niveau',
        'montant_total',
        'annee_scolaire_id',
    ];

    protected $casts = [
        'montant_total' => 'decimal:2',
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
