<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'project1',
            'image' => 'img/project1.jpg',
            'description' => 'inhoud1',
            'category_id' => '1',            
        ]);

        Project::create([
            'title' => 'project2',
            'image' => 'img/project1.jpg',
            'description' => 'inhoud2',
            'category_id' => '2',
        ]);

        Project::create([
            'title' => 'project3',
            'image' => 'img/project1.jpg',
            'description' => 'inhoud3',
            'category_id' => '3',
        ]);
    }
}
