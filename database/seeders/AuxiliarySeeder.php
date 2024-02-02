<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Book;

class AuxiliarySeeder extends Seeder
{
    public function run(): void
    {
        // Criação de Usuários

        User::create([
            'name'              => 'Bruno Rizzo',     // Administrador
            'email'             => '50008382@pp.rj',
            'identify'          => '50008382',
            'password'          => bcrypt('password'),
            'role_id'           => 1,
            'prisional_unit_id' => 1,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Eduardo Vasconcelos',  // Analista SSISPEN (Auditor)
            'email'             => '53115115@pp.rj',
            'identify'          => '53115115',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 1,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Vanessa Cavalcante',  // Analista Corregedoria (Auditor)
            'email'             => '43218564@pp.rj',
            'identify'          => '43218564',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 3,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Anderson Martins',  // Subsecretário de Gestão Operacional (Auditor)
            'email'             => '43214321@pp.rj',
            'identify'          => '43214321',
            'password'          => bcrypt('password'),
            'role_id'           => 2,
            'prisional_unit_id' => 55,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'José Carlos',  // Diretor Constantino Cokotós
            'email'             => '12345678@pp.rj',
            'identify'          => '12345678',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 4,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Mauricio Duarte',  // Subdiretor Constantino Cokotós
            'email'             => '87654321@pp.rj',
            'identify'          => '87654321',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 4,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Diego Alcântara',  // Chefe de Segurança Constantino Cokotós
            'email'             => '24681012@pp.rj',
            'identify'          => '24681012',
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 4,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Marcelo Neves',  // Controle de Portaria Constantino Cokotós
            'email'             => '35745380@pp.rj',
            'identify'          => '35745380',
            'password'          => bcrypt('password'),
            'role_id'           => 6,
            'prisional_unit_id' => 4,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Flávio Rangel',  // Diretor Helio Gomes
            'email'             => '12348765@pp.rj',
            'identify'          => '12348765',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 8,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Rodrigo Almeida',  // Subdiretor Helio Gomes
            'email'             => '87651234@pp.rj',
            'identify'          => '87651234',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 8,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Márcio Botelho',  // Chefe de Segurança Helio Gomes
            'email'             => '43211234@pp.rj',
            'identify'          => '43211234',
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 8,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Débora Martins',  // Controle de Portaria Helio Gomes
            'email'             => '43218765@pp.rj',
            'identify'          => '43218765',
            'password'          => bcrypt('password'),
            'role_id'           => 6,
            'prisional_unit_id' => 8,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Marcelo Ferreira',  // Diretor Jorge Santana
            'email'             => '50007385@pp.rj',
            'identify'          => '50007385',
            'password'          => bcrypt('password'),
            'role_id'           => 3,
            'prisional_unit_id' => 12,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Paulo Vieira',  // Subdiretor Jorge Santana
            'email'             => '51120008@pp.rj',
            'identify'          => '51120008',
            'password'          => bcrypt('password'),
            'role_id'           => 4,
            'prisional_unit_id' => 12,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Fernando Araújo',  // Chefe de Segurança Jorge Santana
            'email'             => '51124321@pp.rj',
            'identify'          => '51124321',
            'password'          => bcrypt('password'),
            'role_id'           => 5,
            'prisional_unit_id' => 12,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);
        User::create([
            'name'              => 'Cristiano Souza',  // Controle de Portaria Jorge Santana
            'email'             => '43215112@pp.rj',
            'identify'          => '43215112',
            'password'          => bcrypt('password'),
            'role_id'           => 6,
            'prisional_unit_id' => 12,
            'status'            => 1,
            'email_verified_at' => now(),
            'created_at'        => now(),
            'updated_at'        => now(),
        ]);


        // Criação de Visitas de Advogados

        Book::create([
            'adv_name'          => 'Henrique Assunção Lutero',
            'oab_number'        => 'RJ123456',
            'entrance'          => '09:45',
            'exit'              => '11:15',
            'prisioner'         => ['Edson Ribeiro Marques','Aurélio Chaves Vieira','Carlos Adriano Ortiz '],
            'user_id'           => 5,
            'prisional_unit_id' => 4,
            'created_at'        => '2023-12-01 09:45:20',
            'updated_at'        => '2023-12-01 09:45:20',
        ]);
        Book::create([
            'adv_name'          => 'Henrique Assunção Lutero',
            'oab_number'        => 'RJ123456',
            'entrance'          => '10:45',
            'exit'              => '12:15',
            'prisioner'         => ['Hélio Moisés Flores','Nivaldo Rosa do Amaral'],
            'user_id'           => 9,
            'prisional_unit_id' => 8,
            'created_at'        => '2023-12-01 10:45:20',
            'updated_at'        => '2023-12-01 10:45:20',
        ]);
        Book::create([
            'adv_name'          => 'Henrique Assunção Lutero',
            'oab_number'        => 'RJ123456',
            'entrance'          => '09:00',
            'exit'              => '10:15',
            'prisioner'         => ['Miguel Willian Casanova'],
            'user_id'           => 13,
            'prisional_unit_id' => 12,
            'created_at'        => '2023-12-01 09:00:20',
            'updated_at'        => '2023-12-01 09:00:20',
        ]);
        Book::create([
            'adv_name'          => 'Ana Vera Beltrão de Queiroz',
            'oab_number'        => 'RJ124357',
            'entrance'          => '14:20',
            'exit'              => '15:30',
            'prisioner'         => ['Arthur Mendonça Pereira'],
            'user_id'           => 5,
            'prisional_unit_id' => 4,
            'created_at'        => '2023-12-02 14:20:15',
            'updated_at'        => '2023-12-02 14:20:15',
        ]);
        Book::create([
            'adv_name'          => 'Juliana Mascarenhas Arantes',
            'oab_number'        => 'RJ874521',
            'entrance'          => '10:20',
            'exit'              => '11:30',
            'prisioner'         => ['Fagner Otávio da Cruz'],
            'user_id'           => 5,
            'prisional_unit_id' => 4,
            'created_at'        => '2023-12-03 10:20:15',
            'updated_at'        => '2023-12-03 10:20:15',
        ]);
        Book::create([
            'adv_name'          => 'Mário Ferreira Gomes',
            'oab_number'        => 'RJ123321',
            'entrance'          => '09:30',
            'exit'              => '10:30',
            'prisioner'         => ['Miguel Willian Casanova'],
            'user_id'           => 13,
            'prisional_unit_id' => 12,
            'created_at'        => '2024-01-10 09:30:20',
            'updated_at'        => '2024-01-10 10:30:20',
        ]);
        Book::create([
            'adv_name'          => 'Mário Ferreira Gomes',
            'oab_number'        => 'RJ123321',
            'entrance'          => '15:30',
            'exit'              => '16:00',
            'prisioner'         => ['Fagner Otávio da Cruz'],
            'user_id'           => 5,
            'prisional_unit_id' => 4,
            'created_at'        => '2024-02-01 15:30:20',
            'updated_at'        => '2024-02-01 16:00:20',
        ]);
        Book::create([
            'adv_name'          => 'Ana Vera Beltrão de Queiroz',
            'oab_number'        => 'RJ124357',
            'entrance'          => '12:15',
            'exit'              => '13:30',
            'prisioner'         => ['Edson Ribeiro Marques','Arthur Mendonça Pereira'],
            'user_id'           => 5,
            'prisional_unit_id' => 4,
            'created_at'        => '2024-01-12 12:15:15',
            'updated_at'        => '2024-01-12 13:30:15',
        ]);

    }
}
