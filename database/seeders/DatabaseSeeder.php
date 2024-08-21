<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Role;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\ProjectFactory;
use Database\Factories\UserRoleFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create an admin role
        $roleAdmin = Role::factory()->create([
            'name' => 'ROLE_ADMIN',
        ]);

        // Create 60 tags
        $tags = Tag::factory(60)->create();

        // Create 200 projects and randomly assign 1 to 8 tags to each project
        Project::factory(200)->create()->each(function ($project) use ($tags) {
            $projectTags = $tags->random(rand(1, 8))->pluck('id');
            $project->tags()->attach($projectTags);
        });

        // Create a user Richard Vullings, assign the admin role, and create 4 featured projects for him
        $richard = User::factory()->create([
            'name' => 'Richard Vullings',
            'email' => 'r.vullings@encore.com',
        ]);

        // Assign the admin role to Richard
        $richard->roles()->attach($roleAdmin);

        Project::factory(4)->create([
            'featured' => true,
            'user_id' => $richard->id, // Assign Richard as the user for these projects
        ])->each(function ($project) use ($tags) {
            $projectTags = $tags->random(rand(1, 5))->pluck('id');
            $project->tags()->attach($projectTags);
        });

        // Assign the admin role to 10 random users
        $users = User::inRandomOrder()->take(10)->get();
        foreach ($users as $user) {
            $user->roles()->attach($roleAdmin);
        }
    }
}
