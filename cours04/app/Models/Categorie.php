<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    private $primarykey = 'categorie_id';

    public function cartes() {
        return $this->hasMany(Carte::class);
    }
    //
}
