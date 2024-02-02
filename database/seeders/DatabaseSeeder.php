<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PrisionalUnitSeeder::class,
            RoleSeeder::class,
            PermissionSeeder::class,
            AssignPermissionsSeeder::class,
            AuxiliarySeeder::class
        ]);
    }
}
