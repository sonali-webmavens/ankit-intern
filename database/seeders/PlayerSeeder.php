<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Testing\RefreshDatabase;

class PlayerSeeder extends Seeder
{
    use RefreshDatabase;
    public function run(): void
    {
        Player::create([
            'name' => 'User',
            'email' => 'User@example.com',
            'password' => bcrypt('12345678'),
        ]);


        Player::factory()->count(50)->create();
    }
}
