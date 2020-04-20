<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'admin',
            'first_name' => 'ADmin',
            'last_name' => 'ADminov',
            'email' => 'mak.millaniitu@gmail.com',
            'date_of_birth' => '1999-08-01',
            'telephone_number' => '9999',
            'password' => bcrypt('12345'),
            'role_id' => '1'
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'first_name' => 'User',
            'last_name' => 'Userov',
            'email' => 'user@gmail.com',
            'password' => bcrypt('12345'),
            'telephone_number' => '7777',
            'date_of_birth' => '1999-08-01',
            'role_id' => '2'
        ]);
    }
}
