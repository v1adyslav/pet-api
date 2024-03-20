<?php

namespace Database\Seeders;

use App\Models\{ User, Event };
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();

        for ($i = 0; $i < 100; $i++) {
            $user = $users->random();
            Event::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
