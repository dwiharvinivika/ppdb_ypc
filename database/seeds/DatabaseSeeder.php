<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@gmail.com',
            'password' => bcrypt('123456'),
            'role' => 'super_admin'
        ]);
        $this->call([JurusanSeeder::class,AchievementCategoriesSeeder::class]);
        DB::insert(file_get_contents(__DIR__.'/asal_sekolah.sql'));
    }
}
