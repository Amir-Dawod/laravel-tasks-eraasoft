<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $posts = [
            [
                'title' => 'Laravel Relationships',
                'content' => 'Learn how to build relationships between models in Laravel.',
                'user_id' => 1,
                'category_id' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Getting Started with Laravel',
                'content' => 'A beginner guide to building applications with Laravel.',
                'user_id' => 2,
                'category_id' => 2,
                'is_featured' => false,
            ],
            [
                'title' => 'Understanding Blade Templates',
                'content' => 'Learn how to use Blade for clean and reusable views.',
                'user_id' => 3,
                'category_id' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'Mastering Eloquent ORM',
                'content' => 'Explore Eloquent models, queries, and relationships.',
                'user_id' => 4,
                'category_id' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Database Migrations',
                'content' => 'Manage your database schema with Laravel migrations.',
                'user_id' => 5,
                'category_id' => 2,
                'is_featured' => false,
            ],
            [
                'title' => 'Laravel Seeders',
                'content' => 'Populate your database with sample data using seeders.',
                'user_id' => 6,
                'category_id' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'Form Validation',
                'content' => 'Validate incoming requests using Laravel validation.',
                'user_id' => 7,
                'category_id' => 4,
                'is_featured' => true,
            ],
            [
                'title' => 'Authentication Basics',
                'content' => 'Protect your application using Laravel authentication.',
                'user_id' => 8,
                'category_id' => 5,
                'is_featured' => false,
            ],
            [
                'title' => 'RESTful Controllers',
                'content' => 'Build REST APIs with Laravel resource controllers.',
                'user_id' => 9,
                'category_id' => 2,
                'is_featured' => false,
            ],
            [
                'title' => 'Working with Middleware',
                'content' => 'Control request flow using middleware.',
                'user_id' => 10,
                'category_id' => 1,
                'is_featured' => true,
            ],
            [
                'title' => 'Laravel Collections',
                'content' => 'Manipulate data easily with powerful collection methods.',
                'user_id' => 1,
                'category_id' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'File Uploads',
                'content' => 'Handle file uploads securely in Laravel.',
                'user_id' => 2,
                'category_id' => 4,
                'is_featured' => false,
            ],
            [
                'title' => 'Mail Notifications',
                'content' => 'Send emails using Laravel Mail.',
                'user_id' => 3,
                'category_id' => 5,
                'is_featured' => true,
            ],
            [
                'title' => 'Task Scheduling',
                'content' => 'Automate repetitive tasks using the scheduler.',
                'user_id' => 4,
                'category_id' => 2,
                'is_featured' => false,
            ],
            [
                'title' => 'Laravel Queues',
                'content' => 'Improve performance with background jobs.',
                'user_id' => 5,
                'category_id' => 1,
                'is_featured' => false,
            ],
            [
                'title' => 'API Resources',
                'content' => 'Transform models into JSON responses.',
                'user_id' => 6,
                'category_id' => 3,
                'is_featured' => true,
            ],
            [
                'title' => 'Soft Deletes',
                'content' => 'Recover deleted records using soft deletes.',
                'user_id' => 7,
                'category_id' => 5,
                'is_featured' => false,
            ],
            [
                'title' => 'Laravel Policies',
                'content' => 'Authorize user actions with policies.',
                'user_id' => 8,
                'category_id' => 4,
                'is_featured' => false,
            ],
            [
                'title' => 'Using Factories',
                'content' => 'Generate fake data for testing and development.',
                'user_id' => 9,
                'category_id' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Caching in Laravel',
                'content' => 'Speed up your application with caching.',
                'user_id' => 10,
                'category_id' => 1,
                'is_featured' => false,
            ],
            [
                'title' => 'Laravel Events',
                'content' => 'Decouple your application using events and listeners.',
                'user_id' => 1,
                'category_id' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'Pagination Made Easy',
                'content' => 'Display large datasets with pagination.',
                'user_id' => 2,
                'category_id' => 5,
                'is_featured' => true,
            ],
            [
                'title' => 'Localization',
                'content' => 'Build multilingual Laravel applications.',
                'user_id' => 3,
                'category_id' => 4,
                'is_featured' => false,
            ],
            [
                'title' => 'Route Model Binding',
                'content' => 'Simplify routes with automatic model resolution.',
                'user_id' => 4,
                'category_id' => 1,
                'is_featured' => false,
            ],
            [
                'title' => 'Custom Artisan Commands',
                'content' => 'Create your own Artisan commands.',
                'user_id' => 5,
                'category_id' => 2,
                'is_featured' => true,
            ],
            [
                'title' => 'Working with Sessions',
                'content' => 'Store user data securely using sessions.',
                'user_id' => 6,
                'category_id' => 5,
                'is_featured' => false,
            ],
            [
                'title' => 'Laravel Broadcasting',
                'content' => 'Build real-time applications with broadcasting.',
                'user_id' => 7,
                'category_id' => 3,
                'is_featured' => false,
            ],
            [
                'title' => 'Testing Laravel Apps',
                'content' => 'Write feature and unit tests for your application.',
                'user_id' => 8,
                'category_id' => 4,
                'is_featured' => true,
            ],
            [
                'title' => 'Dependency Injection',
                'content' => 'Understand Laravel service container and dependency injection.',
                'user_id' => 9,
                'category_id' => 2,
                'is_featured' => false,
            ],
            [
                'title' => 'Deploying Laravel',
                'content' => 'Best practices for deploying Laravel applications.',
                'user_id' => 10,
                'category_id' => 1,
                'is_featured' => true,
            ],
        ];
        foreach ($posts as $post) {
            Post::create($post);
        }
    }
}
  