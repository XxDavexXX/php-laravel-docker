<?php

use Illuminate\Database\Seeder;
use App\Seeders\UsuarioSeeder; // Asegúrate de importar el seeder de Usuario

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsuarioSeeder::class); // Descomentar esta línea para llamar al seeder de Usuario
    }
}
