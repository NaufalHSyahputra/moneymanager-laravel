<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategoryTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('category_types')->truncate();
        DB::table('category_types')->insert([
            ['id' => 1, 'name' => 'Income'],
            ['id' => 2, 'name' => 'Expense'],
            ['id' => 3, 'name' => 'Transfer'],
        ]);
    }
}
