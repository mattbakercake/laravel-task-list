<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        DB::table('tasks')->insert([
            'name' => 'Create task migration',
            'description' => 'Migration creates task table',
            'complete' => false
        ]);

        DB::table('tasks')->insert([
            'name' => 'Create task model',
            'description' => 'Model implements active record pattern for task table',
            'complete' => false
            
        ]);

        DB::table('tasks')->insert([
            'name' => 'Create task seeder',
            'description' => 'We want to create some example tasks to work with',
            'complete' => false
        ]);

        DB::table('tasks')->insert([
            'name' => 'Add route to list tasks',
            'description' => 'Set up route and controller to list tasks',
            'complete' => false
        ]);

        DB::table('tasks')->insert([
            'name' => 'Add a tiny bit of interface sugar',
            'description' => 'Make view look a little more presentable with basic styling',
            'complete' => false
        ]);

        DB::table('tasks')->insert([
            'name' => 'Further enhancements',
            'description' => 'Add in further features if any time',
            'complete' => false
        ]);
    }
}
