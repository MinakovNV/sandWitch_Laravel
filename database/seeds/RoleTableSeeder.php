<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'id' => 1,
            'role_name' => 'Admin'
        ]);

        DB::table('roles')->insert([
            'id' => 2,
            'role_name' => 'User'
        ]);
    }
}
