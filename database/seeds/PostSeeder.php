<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();

            $post->title = $faker->text(20);
            $post->description = $faker->paragraph(3);
            $post->image = $faker->imageUrl(360, 360);
            $post->slug = Str::slug($post->title, '-');
            $post->save();
        }
    }
}
