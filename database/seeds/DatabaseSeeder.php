<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        DB::table('users')->insert([
            'uuid' => Str::random(36),
            'nama' => 'admin',
            'username' => 'admin',
            'no_hp' => '087771787178',
            'role' => 2,
            'foto' => 'default.jpg',
            'password' => Hash::make('admin'),
        ]);

    }
}
