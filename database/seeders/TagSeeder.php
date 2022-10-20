<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
                'name'=> 'Data Science',
        ]);
        Tag::create([
                'name'=> 'Productivity',
        ]);
        Tag::create([
                'name'=> 'Relationships',
        ]);
        Tag::create([
                'name'=> 'Playing',
        ]);
        Tag::create([
                'name'=> 'Reading',
        ]);
        Tag::create([
                'name'=> 'Music',
        ]);
        Tag::create([
                'name'=> 'Writing',
        ]);
        Tag::create([
                'name'=> 'Testing',
        ]);
        
    }
}
