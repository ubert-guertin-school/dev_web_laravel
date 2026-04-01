<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Lire un fichier SQL et l'éxécuter
        DB::unprepared(file_get_contents(
            base_path('script.sql')
        ));
        // 4. Générer aléatoirement des données semi réalistes
    }
}
