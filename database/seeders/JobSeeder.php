<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jobs')->insert([
            'name' => 'Frontend Web Programmer'
        ]);
        DB::table('jobs')->insert([
            'name' => 'Fullstack Web Programmer'
        ]);
        DB::table('jobs')->insert([
            'name' => 'Quality Control'
        ]);
    }
}
