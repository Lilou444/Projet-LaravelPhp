<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\User::class)->create()->each(function ($user) {
            $user->assignRole('compagny')->posts()->save(factory(App\Post::class)->make());
        });
    }
}
