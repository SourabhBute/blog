<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('posts')->insert(
            [
            'title'=>"Demo1",
            'body'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit",
            'created_at' => Carbon::now()->toDateTimeString(),
            'updated_at' => Carbon::now()->toDateTimeString(),
            ],
            
            [
                'titile'=>"Test",
                'body'=>"consectetur adipiscing elit",
                'created_at'=>Carbon::now()->toDateTimeString(),
                'updated_at'=>Carbon::now()->toDateTimeString(),
            ]
                         
        );
    }
}
