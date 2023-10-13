<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admins = [
            [
                'First_name' => 'John',
                'Last_name' => 'Doe',
                'Email' => 'johndoe@example.com',
                'password' => Hash::make('password1'),
                'Phone' => '1234567890',
                'Gender' => 'Male',
                'Date_of_birth' => '1990-01-01',
                'linkedin' => 'https://www.linkedin.com/in/johndoe',
                'position' => 'technical',
                'Role' => 1, // Replace with the appropriate role value
            ],
            [
                'First_name' => 'Jane',
                'Last_name' => 'Smith',
                'Email' => 'janesmith@example.com',
                'password' => Hash::make('password2'),
                'Phone' => '9876543210',
                'Gender' => 'Female',
                'Date_of_birth' => '1995-03-15',
                'linkedin' => 'https://www.linkedin.com/in/janesmith',
                'position' => 'Job Coach Specialist',
                'Role' => 2, // Replace with the appropriate role value
            ],
            [
                'First_name' => 'Sara',
                'Last_name' => 'Ababneh',
                'Email' => 'saraababneh@example.com', // Changed the email address
                'password' => Hash::make('password3'),
                'Phone' => '0792941592',
                'Gender' => 'Female',
                'Date_of_birth' => '1995-03-15',
                'linkedin' => 'https://www.linkedin.com/in/sara-ababneh-8772b5200',
                'position' => 'manager',
                'Role' => 0, // Replace with the appropriate role value
            ],
            // Add more admin data as needed
        ];

        foreach ($admins as $admin) {
            Admin::create([
                'First_name' => $admin['First_name'],
                'Last_name' => $admin['Last_name'],
                'Email' => $admin['Email'],
                'password' => ($admin['password']),
                'Phone' => $admin['Phone'],
                'Gender' => $admin['Gender'],
                'Date_of_birth' =>$admin['Date_of_birth'],
                'linkedin' => $admin['linkedin'],
                'position' => $admin['position'],
                'Role' => $admin['Role'],
            ]);
        }
    }
    
}

