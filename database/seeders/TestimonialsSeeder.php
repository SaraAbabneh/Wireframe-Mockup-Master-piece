<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Testimonial;

class TestimonialsSeeder extends Seeder
{
    public function run()
    {
        $testimonialsData = [
            [
                'fname' => 'John',
                'lname' => 'Doe',
                'img' => 'john-doe.jpg',
                'message' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            ],
            [
                'fname' => 'Jane',
                'lname' => 'Smith',
                'img' => 'jane-smith.jpg',
                'message' => 'Vestibulum volutpat mauris ac tincidunt posuere.',
            ],
            // Add more testimonials data as needed
        ];

        foreach ($testimonialsData as $data) {
            Testimonial::create($data);
        }
    }
}
