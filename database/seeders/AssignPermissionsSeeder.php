<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AssignPermissionsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('permission_role')->insert([

            ['permission_id'=>'1', 'role_id'=>'1'],
            ['permission_id'=>'2', 'role_id'=>'1'],
            ['permission_id'=>'3', 'role_id'=>'1'],
            ['permission_id'=>'4', 'role_id'=>'1'],
            ['permission_id'=>'5', 'role_id'=>'1'],
            ['permission_id'=>'6', 'role_id'=>'1'],
            ['permission_id'=>'7', 'role_id'=>'1'],
            ['permission_id'=>'8', 'role_id'=>'1'],
            ['permission_id'=>'9', 'role_id'=>'1'],
            ['permission_id'=>'10', 'role_id'=>'1'],
            ['permission_id'=>'11', 'role_id'=>'1'],
            ['permission_id'=>'12', 'role_id'=>'1'],
            ['permission_id'=>'13', 'role_id'=>'1'],

            ['permission_id'=>'9', 'role_id'=>'2'],
            ['permission_id'=>'11', 'role_id'=>'2'],
            ['permission_id'=>'12', 'role_id'=>'2'],
            ['permission_id'=>'13', 'role_id'=>'2'],

            ['permission_id'=>'5', 'role_id'=>'3'],
            ['permission_id'=>'6', 'role_id'=>'3'],
            ['permission_id'=>'7', 'role_id'=>'3'],
            ['permission_id'=>'8', 'role_id'=>'3'],
            ['permission_id'=>'9', 'role_id'=>'3'],
            ['permission_id'=>'10', 'role_id'=>'3'],

            ['permission_id'=>'5', 'role_id'=>'4'],
            ['permission_id'=>'6', 'role_id'=>'4'],
            ['permission_id'=>'7', 'role_id'=>'4'],
            ['permission_id'=>'8', 'role_id'=>'4'],
            ['permission_id'=>'9', 'role_id'=>'4'],
            ['permission_id'=>'10', 'role_id'=>'4'],
            ['permission_id'=>'12', 'role_id'=>'4'],

            ['permission_id'=>'5', 'role_id'=>'5'],
            ['permission_id'=>'6', 'role_id'=>'5'],
            ['permission_id'=>'7', 'role_id'=>'5'],
            ['permission_id'=>'8', 'role_id'=>'5'],
            ['permission_id'=>'9', 'role_id'=>'5'],
            ['permission_id'=>'10', 'role_id'=>'5'],
            ['permission_id'=>'12', 'role_id'=>'5'],

            ['permission_id'=>'5', 'role_id'=>'6'],
            ['permission_id'=>'6', 'role_id'=>'6'],
            ['permission_id'=>'7', 'role_id'=>'6'],
            ['permission_id'=>'8', 'role_id'=>'6'],

           ]);
    }
}

// *** Roles ***

// 1 - Administrador
// 2 - Auditor
// 3 - Diretor
// 4 - Subdiretor
// 5 - Chefe de Segurança
// 6 - Controle de Portaria

// *** Permissions ***

// 1 - usuário-cadastrar
// 2 - usuário-visualizar
// 3 - usuário-editar
// 4 - usuário-excluir

// 5 - registro-cadastrar
// 6 - registro-visualizar
// 7 - registro-editar
// 8 - registro-excluir

// 9 - pesquisa-visualizar
// 10 - pesquisa-editar
// 11 - pesquisa-unidade

// 12 - relatório-visualizar
// 13 - relatório-auditoria

