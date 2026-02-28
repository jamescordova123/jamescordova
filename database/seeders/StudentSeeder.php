<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker; 
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker =\Faker\Factory::create();

        for ($i = 0; $i < 20; $i++) {

            DB::table('students')->insert([
                 'student_number' => '2026' . str_pad($i + 1, 4, '0', STR_PAD_LEFT),
                 'first_name'     => $faker->firstName,
                 'middle_name'    => $faker->optional()->firstName,
                 'last_name'      => $faker->lastName,
                 'email'          => $faker->unique()->safeEmail,
                 'contact_number'   => $faker->optional()->phoneNumber,
                 'course'         => $faker->randomElement([
                    'BSIT',
                    'BSCS',
                    'BSIS',
                    'BSEMC',
               ]),   
               'year_level'      => $faker->numberBetween(1, 4),
               'academic_year'   => ('2025-2026'),
               'gpa'             => $faker->randomFloat(2, 1.00, 4.00),
               'birth_date'      => $faker->date(),
               'gender' => $faker->randomElement(['M','F']),   
               'created_at'      => now(),
               'updated_at'      =>now(),
            ]);      
    }   
}
}