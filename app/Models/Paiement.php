<?php

namespace App\Models;

use App\Models\Recu;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    protected $fillable = [
        'date_paiement',
        'montant',
        'mode_paiement',
        'reference',
        'statut',
        'observation',
        'inscription_id',
        'user_id',
    ];

    protected $casts = [
        'date_paiement' => 'date',
        'montant' => 'decimal:2',
    ];

    public function inscription()
    {
        return $this->belongsTo(Inscription::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function recu()
    {
        return $this->hasOne(Recu::class);
    }
}
