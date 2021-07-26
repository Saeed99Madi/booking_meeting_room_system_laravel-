<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'description' => 'the god of the entire system'
        ]);
        // create role customer
        Role::create([
            'name' => 'customer',
            'description' => 'They`ll only have limited access'
        ]);
    }
}
