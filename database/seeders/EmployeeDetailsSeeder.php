<?php

namespace Database\Seeders;

use App\Models\EmployeeDetails;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeDetailsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        EmployeeDetails::factory()->count(50)->create();

    }
}
