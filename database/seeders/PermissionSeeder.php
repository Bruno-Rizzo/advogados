<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionSeeder extends Seeder
{

    public function run(): void
    {
        Permission::create(['name' => 'usuario-cadastrar']);
        Permission::create(['name' => 'usuario-visualizar']);
        Permission::create(['name' => 'usuario-editar']);
        Permission::create(['name' => 'usuario-excluir']);

        Permission::create(['name' => 'registro-cadastrar']);
        Permission::create(['name' => 'registro-visualizar']);
        Permission::create(['name' => 'registro-editar']);
        Permission::create(['name' => 'registro-excluir']);

        Permission::create(['name' => 'pesquisa-visualizar']);
        Permission::create(['name' => 'pesquisa-editar']);
        Permission::create(['name' => 'pesquisa-unidade']);

        Permission::create(['name' => 'relatório-visualizar']);
        Permission::create(['name' => 'relatório-auditoria']);
    }
}
