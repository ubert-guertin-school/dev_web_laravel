<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    protected $fillable = [
        'client_id',
        'montant_total',
        'status',
        'stripe_payment_intent_id'
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }
//
}
