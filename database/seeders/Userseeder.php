<?php

namespace Database\Seeders;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
         $admin = User::factory()->create([
            'name' => 'Administrador TaskFlow',
            'email' => 'admin@taskflow.test',
        ]);
        User::factory(8)->create();
    }
}

    

