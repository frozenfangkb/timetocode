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
        Permission::create([ 'name' => 'Leer cursos' ]);
        Permission::create([ 'name' => 'Actualizar cursos' ]);
        Permission::create([ 'name' => 'Crear cursos' ]);
        Permission::create([ 'name' => 'Borrar cursos' ]);
        Permission::create([ 'name' => 'Ver dashboard' ]);
        Permission::create([ 'name' => 'Crear rol' ]);
        Permission::create([ 'name' => 'Listar roles' ]);
        Permission::create([ 'name' => 'Editar rol' ]);
        Permission::create([ 'name' => 'Eliminar rol' ]);
        Permission::create([ 'name' => 'Listar usuarios' ]);
        Permission::create([ 'name' => 'Editar usuario' ]);
    }
}
