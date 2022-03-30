<?php

namespace Database\Seeders;

use App\Models\OrdenDinos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\PublicacionSeeder;
use Database\Seeders\DinosaurioSeeder;
use Database\Seeders\OrdenDinoSeeder;
use Database\Seeders\SubordenDinoSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PublicacionSeeder::class);
        $this->call(OrdenDinoSeeder::class);
        $this->call(SubordenDinoSeeder::class);
        $this->call(DinosaurioSeeder::class);
    }
}
