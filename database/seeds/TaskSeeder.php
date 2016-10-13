<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->delete();
        DB::table('tasks')->insert([
            [
            	'name' => 'Make a task', 
            	'description' => 'Create a new task', 
            	'created_at' => '2016-10-11 11:22:38', 
            	'updated_at' => '2016-10-11 11:22:38'
            ],
            [
                'name' => 'Change a task', 
                'description' => 'Edit an existing task', 
                'created_at' => '2016-10-11 11:25:38', 
                'updated_at' => '2016-10-11 11:25:38'
            ],
            [
                'name' => 'Delete a task', 
                'description' => '', 
                'created_at' => '2016-10-11 16:22:38', 
                'updated_at' => '2016-10-11 16:22:38'
            ]
        ]);
    }
}
