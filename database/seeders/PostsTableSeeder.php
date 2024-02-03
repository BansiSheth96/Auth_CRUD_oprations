<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //add dummy data here
        DB::table('posts')->insert([
            'title' => 'My First Post',
            'content' => 'Â Post a How To or Tutorial.',

            'title' => 'News Post',
            'content' => 'Â Post a How To or Tutorial.',

        ]);
    }
}
