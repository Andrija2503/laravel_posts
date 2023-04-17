<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post1 = new Post();
        $post1->title = "First Post";
        $post1->body = "Lorem ipsum1";
        $post1->autor = "Milos";
        $post1->save();

        $post2 = new Post();
        $post2->title = "Second Post";
        $post2->body = "Lorem ipsum2";
        $post2->autor = "Ivan";
        $post2->save();
    }
}
