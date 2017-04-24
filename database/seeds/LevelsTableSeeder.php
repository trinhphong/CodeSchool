<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('levels')->insert([
            'name' => 'HTML',
            'description' => 'Format text content and links with HTML.',
            'note' => 'FREE Level',
            'image' => 'xxx.png',
            'course_id' => '1',
            'slide_id' => '1'
        ]);

        DB::table('levels')->insert([
            'name' => 'CSS',
            'description' => 'Change the way that content is displayed with CSS.',
            'note' => '',
            'image' => 'xxx.png',
            'course_id' => '1',
            'slide_id' => '2'
        ]);
    }
}
