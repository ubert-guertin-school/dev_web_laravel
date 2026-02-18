<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Champion extends Model
{
    public function categories() {
        return $this->belongsToMany(Categorie::class);
    }

    public function getImageAttribute() {
        if (Str::contains($this->nom, "'")) {
            return Str::ucfirst(
                Str::replace([" ", "'", "."], [], Str::lower($this->nom))
            );
        }

        return Str::replace([" ", "'", "."], [], $this->nom);
    }
}
