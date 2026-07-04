<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $comments = [
            ['author_name' => 'Amir',    'content' => 'Great article! Very helpful.',                         'post_id' => 1],
            ['author_name' => 'Ahmed',   'content' => 'Thanks for sharing this.',                             'post_id' => 2],
            ['author_name' => 'Mohamed', 'content' => 'Excellent explanation.',                               'post_id' => 3],
            ['author_name' => 'Ali',     'content' => 'This solved my issue.',                                'post_id' => 4],
            ['author_name' => 'Omar',    'content' => 'Very informative post.',                               'post_id' => 5],
            ['author_name' => 'Youssef', 'content' => 'I really enjoyed reading this.',                       'post_id' => 6],
            ['author_name' => 'Mahmoud', 'content' => 'Keep up the great work!',                              'post_id' => 7],
            ['author_name' => 'Khaled',  'content' => 'This was exactly what I needed.',                      'post_id' => 8],
            ['author_name' => 'Mostafa', 'content' => 'Amazing tutorial.',                                    'post_id' => 9],
            ['author_name' => 'Hassan',  'content' => 'Everything is clear now.',                             'post_id' => 10],

            ['author_name' => 'Amir',    'content' => 'Very well written.',                                   'post_id' => 11],
            ['author_name' => 'Ahmed',   'content' => 'Thanks for the useful tips.',                          'post_id' => 12],
            ['author_name' => 'Mohamed', 'content' => 'Looking forward to more posts.',                       'post_id' => 13],
            ['author_name' => 'Ali',     'content' => 'Laravel is awesome!',                                  'post_id' => 14],
            ['author_name' => 'Omar',    'content' => 'I learned a lot.',                                     'post_id' => 15],
            ['author_name' => 'Youssef', 'content' => 'Fantastic explanation.',                               'post_id' => 16],
            ['author_name' => 'Mahmoud', 'content' => 'Very practical example.',                              'post_id' => 17],
            ['author_name' => 'Khaled',  'content' => 'Nice work.',                                           'post_id' => 18],
            ['author_name' => 'Mostafa', 'content' => 'Simple and easy to follow.',                           'post_id' => 19],
            ['author_name' => 'Hassan',  'content' => 'Thanks a lot!',                                        'post_id' => 20],

            ['author_name' => 'Amir',    'content' => 'Excellent guide.',                                     'post_id' => 21],
            ['author_name' => 'Ahmed',   'content' => 'Very useful for beginners.',                           'post_id' => 22],
            ['author_name' => 'Mohamed', 'content' => 'Clean and organized content.',                         'post_id' => 23],
            ['author_name' => 'Ali',     'content' => 'I appreciate your effort.',                            'post_id' => 24],
            ['author_name' => 'Omar',    'content' => 'One of the best Laravel articles.',                    'post_id' => 25],

            ['author_name' => 'Youssef', 'content' => 'Great explanation with examples.',                     'post_id' => 1],
            ['author_name' => 'Mahmoud', 'content' => 'Helped me understand the concept.',                    'post_id' => 2],
            ['author_name' => 'Khaled',  'content' => 'Very detailed article.',                               'post_id' => 3],
            ['author_name' => 'Mostafa', 'content' => 'Easy to read.',                                        'post_id' => 4],
            ['author_name' => 'Hassan',  'content' => 'Thank you for sharing.',                               'post_id' => 5],

            ['author_name' => 'Amir',    'content' => 'I will recommend this to my friends.',                 'post_id' => 6],
            ['author_name' => 'Ahmed',   'content' => 'Looking forward to the next tutorial.',                'post_id' => 7],
            ['author_name' => 'Mohamed', 'content' => 'Very interesting topic.',                              'post_id' => 8],
            ['author_name' => 'Ali',     'content' => 'Everything works perfectly.',                          'post_id' => 9],
            ['author_name' => 'Omar',    'content' => 'Nice examples.',                                       'post_id' => 10],

            ['author_name' => 'Youssef', 'content' => 'This made Laravel much easier.',                       'post_id' => 11],
            ['author_name' => 'Mahmoud', 'content' => 'Well explained.',                                      'post_id' => 12],
            ['author_name' => 'Khaled',  'content' => 'I enjoyed this article.',                              'post_id' => 13],
            ['author_name' => 'Mostafa', 'content' => 'Very helpful content.',                                'post_id' => 14],
            ['author_name' => 'Hassan',  'content' => 'Keep posting more Laravel tutorials.',                 'post_id' => 15],
        ];
        foreach ($comments as $comment) {
            Comment::create($comment);
        }
    }
}
