<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 50)
            ->create()
            ->each(function ($user) {
                $user->tourist()->save(factory(App\Tourist::class)->make());
                $user->guide()->save(factory(App\Guide::class)->make());
            });
    }
}