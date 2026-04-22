<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
    public function achats() {
        return $this->hasMany(Achat::class);
    }
}
