<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SpecializationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $specialization= [
            [
                'name' => 'Cardiology'
            ],
            [
                'name' => 'Oncology '
            ],
            [
                'name' => 'Pediatrics '
            ],
            [
                'name' => 'Dermatology '
            ],
            [
                'name' => 'Neurology '
            ],
            [
                'name' => 'Gynecology '
            ],
            [
                'name' => 'Orthopedics '
            ],
            [
                'name' => 'Psychiatry '
            ],
            [
                'name' => 'Heamatologist'
            ],[
                'name' => 'Neurologist'
            ]
        ];
    }
}
