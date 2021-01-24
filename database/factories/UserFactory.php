<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comment;
use App\Models\Post;
use App\Models\Reply;
use App\Models\PostMeta;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

//seeding User
$factory->define(User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => now(),
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => Str::random(10),
    ];
});

//seeding Post
$factory->define(Post::class, function (Faker $faker) {
    return [
        'category_id'=>rand(1,12),
        'sub_category_id'=>rand(1,20),
        'post_author'=>rand(3,12),
        'title'=>$faker->unique()->sentence,
        'slug'=>$faker->unique()->slug,
        'content'=>$faker->paragraph,
        'status'=>'published',
        'thumbnail'=>$faker->imageUrl(),
        'created_at' => $faker->dateTimeBetween('-1 years', 'now'),
    ];
});

//seeding Post Comments
$factory->define(Comment::class, function (Faker $faker) {
    return [
        'user_id'=>rand(3,12),
        'post_id'=>rand(1,120),
        'message'=>$faker->unique()->sentence,
    ];
});

//seeding Post Reply
$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id'=>rand(3,12),
        'post_id'=>rand(1,120),
        'comment_id'=>rand(1,200),
        'message'=>$faker->unique()->sentence,
    ];
});

//seeding Post Meta
$factory->define(PostMeta::class, function (Faker $faker) {
    return [
        'post_id' => Post::all()->random()->id,
        'meta_keywords'=>$faker->unique()->sentence,
        'meta_description'=>$faker->unique()->sentence,
    ];
});
