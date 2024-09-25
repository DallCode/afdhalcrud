<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name' => 'Novel', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Komik', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Biografi', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
