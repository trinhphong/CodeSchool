<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(AdminsTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(SlidesTableSeeder::class);
        $this->call(LevelsTableSeeder::class);
    }
}
