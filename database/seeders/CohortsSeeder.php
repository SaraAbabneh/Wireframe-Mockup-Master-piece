<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Cohort;

class CohortsSeeder extends Seeder
{
    public function run()
    {
        $cohortsData = [
            [
                'number' => 1,
                'start_date' => '2023-01-01',
                'end_date' => '2023-06-30',
                'unmber_students' => 31,
                'unmber_full_stack' => 29,
                'unmber_front_end' => 2,
                'unmber_back_end' => 0,
                'unmber_employment' => 30,
            ],
            [
                'number' => 2, // Change the number to a unique value, e.g., 2
                'start_date' => '2023-02-01',
                'end_date' => '2023-07-31',
                'unmber_students' => 35,
                'unmber_full_stack' => 30,
                'unmber_front_end' => 1,
                'unmber_back_end' => 4,
                'unmber_employment' => 31,
            ],
            [
                'number' => 3, // Change the number to a unique value, e.g., 2
                'start_date' => '2023-02-01',
                'end_date' => '2023-07-31',
                'unmber_students' => 35,
                'unmber_full_stack' => 35,
                'unmber_front_end' => 35,
                'unmber_back_end' => 35,
                'unmber_employment' => 35,
            ],
            // Add more cohort data as needed
        ];

        foreach ($cohortsData as $data) {
            Cohort::create($data);
        }
    }
}
