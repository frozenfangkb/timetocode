<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'David Rodriguez Miranda',
            'email' => 'wolfs_pride@outlook.es',
            'password' => bcrypt('12345678')
        ]);

        $user->assignRole('Administrador');

        User::factory(99)->create();
    }
}
