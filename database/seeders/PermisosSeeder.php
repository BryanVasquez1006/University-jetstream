<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use App\Models\Permisos;


class PermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Permisos::factory(50)->create();
       $this->call([RoleSeeder::class]);

        Permisos::create([
            "name" => "Bryan Vasquez",
            "email" => "admin2@admin.com",
            "password" => Hash::make("admin2")
        ])->assignRole("admin"); //asignando el rol que va tener este usuario
//Creando un usuario con los permisos de admin

        $this->call(PermisosSeeder::class);
    }
}

