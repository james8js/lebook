<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersSeeder::class);
         $this->call(FollowersSeeder::class);
         $this->call(PostsSeeder::class);
         $this->call(PostLikesSeeder::class);
         $this->call(CommentsSeeder::class);
         $this->call(CommentLikesSeeder::class);
    }
}
