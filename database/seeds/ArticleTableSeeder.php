<?php

use Illuminate\Database\Seeder;
use App\Models\Article;
class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's truncate our existing records to start from scratch.
        Article::truncate();
        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 50; $i++) {
            Article::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
                'keywords' => $faker->word(1),
                'thum' => '/static/images/news.jpg',
                'file_url' => 'N/A',
                'description' => $faker->sentence(2),
                'content' => $faker->paragraph,
                'link' => '#',
                'class_id' => rand(1,6),
                'class_type' => rand(0,2),
                'is_del' => rand(0,1),
                'sort' => rand(1,50),
                'status' => rand(1,2),
                'views' => rand(50,500),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ]);
        }
    }
}
