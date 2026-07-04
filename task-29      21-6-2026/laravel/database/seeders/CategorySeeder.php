<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Laravel Basics'],
            ['name' => 'Eloquent ORM'],
            ['name' => 'Blade Templates'],
            ['name' => 'Database'],
            ['name' => 'Authentication'],
            ['name' => 'Validation'],
            ['name' => 'Routing'],
            ['name' => 'Controllers'],
            ['name' => 'Middleware'],
            ['name' => 'API Development'],
            ['name' => 'Queues & Jobs'],
            ['name' => 'Events & Listeners'],
            ['name' => 'Caching'],
            ['name' => 'Testing'],
            ['name' => 'Deployment'],
            ['name' => 'File Management'],
            ['name' => 'Mail'],
            ['name' => 'Task Scheduling'],
            ['name' => 'Localization'],
            ['name' => 'Performance'],
        ];
            foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
