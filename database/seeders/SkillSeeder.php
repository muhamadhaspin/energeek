<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('skills')->insert([
            'name' => 'PHP'
        ]);
        DB::table('skills')->insert([
            'name' => 'PostgreSQL'
        ]);
        DB::table('skills')->insert([
            'name' => 'API (JSON,REST)'
        ]);
        DB::table('skills')->insert([
            'name' => 'Version Control System (Gitlab,Github)'
        ]);
    }
}
