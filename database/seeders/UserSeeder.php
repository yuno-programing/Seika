<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'name' => '田中太郎',
            'email' => 'tester@test',
            'password' => Hash::make('testertest'),
            'position' => '大学教授',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
