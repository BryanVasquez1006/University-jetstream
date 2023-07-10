<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Maestros;

class MaestrosSeeder extends Seeder
{


    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Maestros::factory(50)->create();
    }
}
