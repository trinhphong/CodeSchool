<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course')->insert([
            'name' => 'Front-end Foundations',
            'description' => 'Learn the fundamentals of HTML and CSS, while building a strong foundation for more advanced front-end development',
            'language' => 'HTML/CSS'
        ]);
    }
}
