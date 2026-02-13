<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Carte extends Model
{
    private $primarykey = 'carte_id';

    public function categorie() {
        return $this->belongsTo(Categorie::class);
    }
}
