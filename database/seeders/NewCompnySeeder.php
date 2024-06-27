<?php

namespace Database\Seeders;

use App\Models\NewCompny;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewCompnySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        NewCompny::factory()->count(50)->create();
    }
}
