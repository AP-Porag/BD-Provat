<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\PostTag;
use App\Models\Reply;
use App\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubCategorySeeder::class);
        $this->call(PostSeeder::class);
        $this->call(TagSeeder::class);

        //seeding using factory
        factory(User::class,10)->create();
        factory(Post::class,120)->create();
        factory(PostTag::class,130)->create();
        factory(Comment::class,200)->create();
        factory(Reply::class,230)->create();

        //user Role Permission seeder
        $this->call(RolePermissionSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(GroupSeeder::class);
    }
}
