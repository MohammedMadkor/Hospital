<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Mohammed YAsser',
                'phone' => '01226630345',
                'gender' => '1',
                'age' => '21',
                'national_id' => '30108011602819',
                'role' => '2',


            ],
            [
                'name' => 'Mohammed said',
                'phone' => '01287009438',
                'gender' => '1',
                'age' => '21',
                'national_id' => '30103121602138',
                'role' => '3',


            ],
            [
                'name' => 'said Halawa',
                'phone' => '01028696836',
                'gender' => '1',
                'age' => '21',
                'national_id' => '30112171601174',
                'role' => '4',


            ],


        ]);
    }
}
