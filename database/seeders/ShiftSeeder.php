<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('shifts')->insert([
            [
            'id' => '1',
            'name'=> 'shift1',
            'start' => '12',
            'end' => '8',
        ],[
            'id' => '2',
            'name'=> 'shift2',
            'start' => '8',
            'end' => '4',
        ] ,
        [
            'id' => '3',
            'name'=> 'shift3',
            'start' => '4',
            'end' => '12',
        ]
        ]
    );
    }

}
