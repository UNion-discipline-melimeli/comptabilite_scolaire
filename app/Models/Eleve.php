<?php

namespace App\Models;

use App\Models\Inscription;
use Illuminate\Database\Eloquent\Model;

class Eleve extends Model
{
    protected $fillable = [
        'matricule',
        'nom_eleve',
        'prenom_eleve',
        'date_naiss_eleve',
        'genre_eleve',
        'nom_parent',
        'contact_parent',
        'email_parent',
    ];

    protected $casts = [
        'date_naiss_eleve' => 'date',
    ];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }
}
