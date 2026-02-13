<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    public function champions() {
        return $this->belongsToMany(Champion::class);
    }
//
}
