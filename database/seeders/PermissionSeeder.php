<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([ 'name' => 'Leer curso' ]);
        Permission::create([ 'name' => 'Editar curso' ]);
        Permission::create([ 'name' => 'Crear curso' ]);
        Permission::create([ 'name' => 'Borrar curso' ]);
    }
}
