<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ProjectFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Project::factory(9)->create();
        Project::factory(4)->create([
            'featured' => true,
            'user_id' => User::factory()->create([
                'name' => 'Richard Vullings',
                'email' => 'r.vullings@encore.com',
            ])
        ]);


    }
}
