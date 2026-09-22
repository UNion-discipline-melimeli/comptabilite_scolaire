<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recu extends Model
{
    protected $fillable = [
        'numero_recu',
        'date_emission',
        'chemin_pdf',
        'paiement_id',
    ];

    protected $casts = [
        'date_emission' => 'date',
    ];

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
    }
}
