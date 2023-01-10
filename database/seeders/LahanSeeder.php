<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LahanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Lahan::factory()->count(10)->create();
    }
}
