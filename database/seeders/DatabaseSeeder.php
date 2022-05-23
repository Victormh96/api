<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(RoleSeeder::class);
        
        factory('App\Models\User', 7000)->create(['role_id' => '1', 'estado' => 'Activado']);
    }
}