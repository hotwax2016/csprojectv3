<?php

use Illuminate\Database\Seeder;
use App\Tourist;

class TouristsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Tourist::class, 50)->create();
    }
}
