<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CultureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('cultures')->insert([
            'id' => 1,
            'name' => '年中行事',
            ]);
        DB::table('cultures')->insert([
            'id' => 2,
            'name' => '儀礼',
            ]);    
         DB::table('cultures')->insert([
            'id' => 3,
            'name' => '芸能',
            ]);
         DB::table('cultures')->insert([
            'id' => 4,
            'name' => '言い伝え',
            ]);    
        DB::table('cultures')->insert([
            'id' => 5,
            'name' => '伝統技術',
            ]);   
        DB::table('cultures')->insert([
            'id' => 6,
            'name' => '史料',
            ]);    
    }
}
