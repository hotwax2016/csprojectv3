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

        $user = User::create([
            'name' => 'user',
            'role' => 'tourist',
            'email' => 'user@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'remember_token' => Str::random(10),
        ]);
    }
}