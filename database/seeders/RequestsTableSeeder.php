<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class RequestsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('requests')->insert([
            'user_id' => 1,
            'name' => 'Jeroen Rijsdijk',
            'email' => 'jeroenrijsdijk@gmail.com',
            'phone_number' => '0614985913',
            'title' => 'Harry',
            'description' => 'Hallo, ik ben Jeroen en ik vroeg me af of ik 12 april op Harry kan passen. Jij betaalt toch dikke stacks?',
        ]);

        DB::table('requests')->insert([
            'user_id' => 2,
            'name' => 'Mats Alkemade',
            'email' => 'matsalkemade@gmail.com',
            'phone_number' => '0614985913',
            'title' => 'Hummer',
            'description' => 'Hallo, ik ben Mats en ik vroeg me af of jij 12 april wilt oppassen op mijn hond Hummer. Ik betaal je dikke stacks.',
        ]);
    }
}
