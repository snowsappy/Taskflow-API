<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\Taskseeder;

use function Laravel\Prompts\task;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
   $this->call([UserSeeder::class,Projectseeder::class,Taskseeder::class]);
        
    }
}
