<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeriodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('periods')->insert([
            [
                'id' => '1',
                'Shift_id' => '1',
                'period_number' => '12:00 PM',
            ],
            [
                'id' => '2',
                'Shift_id' => '1',
                'period_number' => '01:00 PM',
            ],
            [
                'id' => '3',
                'Shift_id' => '1',
                'period_number' => '02:00 PM',
            ],
            [
                'id' => '4',
                'Shift_id' => '1',
                'period_number' => '03:00 PM',
            ],
            [
                'id' => '5',
                'Shift_id' => '1',
                'period_number' => '04:00 PM',
            ],
            [
                'id' => '6',
                'Shift_id' => '1',
                'period_number' => '05:00 PM',
            ],
            [
                'id' => '7',
                'Shift_id' => '1',
                'period_number' => '06:00 PM',
            ],
            [
                'id' => '8',
                'Shift_id' => '1',
                'period_number' => '07:00 PM',
            ],
            [
                'id' => '9',
                'Shift_id' => '2',
                'period_number' => '08:00 PM',
            ],
            [
                'id' => '10',
                'Shift_id' => '2',
                'period_number' => '09:00 PM',
            ],
            [
                'id' => '11',
                'Shift_id' => '2',
                'period_number' => '10:00 PM',
            ],
            [
                'id' => '12',
                'Shift_id' => '2',
                'period_number' => '11:00 PM',
            ],
            [
                'id' => '13',
                'Shift_id' => '2',
                'period_number' => '12:00 AM',
            ],
            [
                'id' => '14',
                'Shift_id' => '2',
                'period_number' => '01:00 AM',
            ],
            [
                'id' => '15',
                'Shift_id' => '2',
                'period_number' => '02:00 AM',
            ],
            [
                'id' => '16',
                'Shift_id' => '2',
                'period_number' => '03:00 AM',
            ],
            [
                'id' => '17',
                'Shift_id' => '3',
                'period_number' => '04:00 AM',
            ],
            [
                'id' => '18',
                'Shift_id' => '3',
                'period_number' => '05:00 AM',
            ],
            [
                'id' => '19',
                'Shift_id' => '3',
                'period_number' => '06:00 AM',
            ],
            [
                'id' => '20',
                'Shift_id' => '3',
                'period_number' => '07:00 AM',
            ],
            [
                'id' => '21',
                'Shift_id' => '3',
                'period_number' => '08:00 AM',
            ],
            [
                'id' => '22',
                'Shift_id' => '3',
                'period_number' => '09:00 AM',
            ],
            [
                'id' => '23',
                'Shift_id' => '3',
                'period_number' => '10:00 AM',
            ],
            [
                'id' => '24',
                'Shift_id' => '3',
                'period_number' => '11:00 AM',
            ],
        ]);
    }
}
