<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(file_get_contents(__DIR__.'/achievement_categories.sql'));
    }
}
