<?php

namespace Database\Seeders;

use App\Models\User;
use Dom\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            PostSeeder::class,
            CommentSeeder::class,
            UserSeeder::class,
            UserSeeder::class,
            CategorySeeder::class,
        ]);
    }
}
