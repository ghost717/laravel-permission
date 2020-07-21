<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            // 'role' => 'admin',
            'email' => 'admin@admin.local',
            'password' => Hash::make('!@#password'),
        ]);
    }
}
