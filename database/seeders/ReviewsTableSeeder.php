<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reviews')->insert([
            'user_id' => 1,
            'name' => 'Jeroen Rijsdijk',
            'title' => 'Goeie',
            'description' => 'Zeer goeie oppas',
            'rating' => 5,
        ]);

        DB::table('reviews')->insert([
            'user_id' => 1,
            'title' => 'Super vriendelijk',
            'description' => 'Zeer goeie oppas, zeer vriendelijk',
            'rating' => 5,
        ]);
    }
}
