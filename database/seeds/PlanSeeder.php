<?php

use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('plans')->insert([
            'id' => 1,
            'name' => 'Plan 1',
            'description' => 'My goal is pass Milestone 1',
            'start_date' => '2020-04-21',
            'end_date' => '2020-04-28',
            'user_id' => 2
        ]);

        DB::table('plans')->insert([
            'id' => 2,
            'name' => 'Plan 2',
            'description' => 'My goal is pass Milestone 2',
            'start_date' => '2020-04-28',
            'end_date' => '2020-04-29',
            'user_id' => 2
        ]);

        DB::table('plans')->insert([
            'id' => 3,
            'name' => 'Plan 1',
            'description' => 'My goal is frontend',
            'start_date' => '2020-04-28',
            'end_date' => '2020-04-29',
            'user_id' => 3
        ]);
    }
}
