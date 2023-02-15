<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        $specializations = [
            [
                'first_name' =>'Kishor',
                'last_name' =>'Shrestha',
                'email'=>'kishor@gmail.com',
                'password' =>'password',
                'gender' => 'm',
                'phone' => '5132231',
                'status' => 'active',
                'address' => 'kogarah',
                'type' => 'doctor',
                'created_at' => Carbon::now()->getTimestamp(),
                'updated_at' => Carbon::now()->getTimestamp()
            ],
        ];
    }
}
