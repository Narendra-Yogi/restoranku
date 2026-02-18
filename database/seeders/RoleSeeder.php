<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    
    public function run(): void
    {
        $roles = [
            ['role_name' => 'admin', 'description' => 'administrator'],
            ['role_name' => 'cashir', 'description' => 'kasir'],
            ['role_name' => 'chef', 'description' => 'koki'],
            ['role_name' => 'costumer', 'descriptin' => 'pelanggan']
        ];

        DB::table('roles')->insert($roles);
    }
}
