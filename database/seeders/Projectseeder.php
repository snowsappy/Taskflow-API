<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        $admin = User::where(
            'email',
            'admin@taskflow.test'
        )->firstOrFail();

        $collaborators = User::where(
            'id',
            '!=',
            $admin->id
        )->get();

        Project::factory(4)
            ->for($admin, 'creator')
            ->create()
            ->each(function (Project $project) use ($collaborators) {
                $participants = $collaborators->random(3);

                $project->participants()->attach($participants);
            });
    }
}