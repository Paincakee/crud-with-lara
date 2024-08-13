<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Tag;
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
        $tags = Tag::factory(60)->create();

        Project::factory(200)->create()->each(function ($project) use ($tags) {
            // Randomly assign 1 to 4 tags to each featured project
            $projectTags = $tags->random(rand(1, 8))->pluck('id');
            $project->tags()->attach($projectTags);
        });

        Project::factory(4)->create([
            'featured' => true,
            'user_id' => User::factory()->create([
                'name' => 'Richard Vullings',
                'email' => 'r.vullings@encore.com',
            ])
        ])->each(function ($project) use ($tags) {
            // Randomly assign 1 to 4 tags to each featured project
            $projectTags = $tags->random(rand(1, 5))->pluck('id');
            $project->tags()->attach($projectTags);
        });


    }
}
