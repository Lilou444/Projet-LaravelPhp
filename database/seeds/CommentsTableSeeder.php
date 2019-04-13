<?php
use Illuminate\Database\Seeder;
use App\Post;
use App\User;
use App\Comment;
class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = Post::all();
        foreach ($posts as $post){
            $users = User::inRandomOrder()->take(10)->get();
            foreach ($users as $user){
                factory(Comment::class, 1)->create([
                    'user_id' => $user->id,
                    'post_id' => $post->id
                ]);
            }
        }
    }
}