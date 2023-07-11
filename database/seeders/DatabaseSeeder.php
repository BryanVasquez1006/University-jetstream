<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
//Creando un usuario con los permisos de admin
        $this->call([RoleSeeder::class]);

        User::create([
            "name" => "Bryan Vasquez",
            "email" => "admin@admin.com",
            "password" => Hash::make("admin")
        ])->assignRole("admin"); //asignando el rol que va tener este usuario
//Creando un usuario con los permisos de admin

        $this->call(PermisosSeeder::class);
    }
}
