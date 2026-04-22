<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Achat extends Model
{
    public function commande() {
        return $this->belongsTo(Commande::class);
    }

    public function produit() {
        return $this->belongsTo(Produit::class);
    }
}
