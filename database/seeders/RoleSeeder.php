<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        DB::table('role')->insert([
            'descripcion' => 'Administrador',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);

        DB::table('role')->insert([
            'descripcion' => 'Auditor',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);
    }
}
