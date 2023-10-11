<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Student;

class StudentsSeeder extends Seeder
{
    public function run()
    {
        $studentsData = [
            [
                'First_name' => 'John',
                'Last_name' => 'Doe',
                'Email' => 'johndoe@example.com',
                'Password' => Hash::make('123@Sara'),
                'Phone' => '07734567890',
                'Major' => 'Computer Science',
                'Gender' => 'Male',
                'Date_of_birth' => '1995-02-15',
                'status' => 'Trainee',
                'linkedin' => 'https://www.linkedin.com/in/johndoe',
                'github' => 'https://github.com/johndoe',
                'cohort_id' => 1, // Replace with the appropriate cohort_id
            ],
            [
                'First_name' => 'Jane',
                'Last_name' => 'Smith',
                'Email' => 'janesmith@example.com',
                'Password' => Hash::make('123Sara@'),
                'Phone' => '07976543210',
                'Major' => 'Engineering',
                'Gender' => 'Female',
                'Date_of_birth' => '1998-04-20',
                'status' => 'Trainee',
                'linkedin' => 'https://www.linkedin.com/in/janesmith',
                'github' => 'https://github.com/janesmith',
                'cohort_id' => 2, // Replace with the appropriate cohort_id
            ],
            [
                'First_name' => 'Sara',
                'Last_name' => 'Ababneh',
                'Email' => 'Sara123@example.com',
                'Password' => Hash::make('@Sara123'),
                'Phone' => '078125652',
                'Major' => 'IT background',
                'Gender' => 'Female',
                'Date_of_birth' => '1995-02-15',
                'status' => 'Trainee',
                'linkedin' => 'https://www.linkedin.com/in/sara123',
                'github' => 'https://github.com/sara123e',
                'cohort_id' => 3, // Replace with the appropriate cohort_id
            ],
            [
                'First_name' => 'Marah',
                'Last_name' => 'John',
                'Email' => 'Marah321@example.com',
                'Password' => Hash::make('@123Sara'),
                'Phone' => '077986654',
                'Major' => 'Engineering',
                'Gender' => 'Female',
                'Date_of_birth' => '1998-04-20',
                'status' => 'Trainee',
                'linkedin' => 'https://www.linkedin.com/in/Marah1235',
                'github' => 'https://github.com/Marah1236',
                'cohort_id' => 3, // Replace with the appropriate cohort_id
            ],
        ];

        foreach ($studentsData as $data) {
            Student::create($data);
        }
    }
}

