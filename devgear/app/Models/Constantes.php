<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Constantes {
    public static $TPS = 0.05;
    public static $TVQ = 0.09975;
    public static $PROVINCES = [
        "QC", "ON", "NB", "NS", "PE", "NL", "MB", "SK", "AB", "BC", "NT", "NU", "YT"
    ];
}
