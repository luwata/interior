<?php

use Illuminate\Database\Seeder;

class StocksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Génération de 30 références stock par client
        factory(App\Project::class, 30)->create();
    }
}
