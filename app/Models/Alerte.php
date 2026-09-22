<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
     protected $fillable = [
        'type_alerte',
        'message',
        'date_alerte',
        'lue',
        'inscription_id',
    ];

    protected $casts = [
        'date_alerte' => 'date',
        'lue' => 'boolean',
    ];

    public function inscription()
    {
        return $this->belongsTo(Inscription::class);
    }
}
