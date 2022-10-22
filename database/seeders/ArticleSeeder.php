<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use Faker\Factory as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,10) as $value) {
            DB::table('articles')->insert([
                'name' => $faker->name(),
                'description' => $faker->text(1000),
                'tag_id' => $faker->randomDigitNotZero(),
            ]);
        }
    }
}
