<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AccountTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('account_types')->truncate();
        DB::table('account_types')->insert([
            ['id' => 1, 'name' => 'Cash'],
            ['id' => 2, 'name' => 'Bank Account'],
            ['id' => 3, 'name' => 'Credit Card'],
            ['id' => 4, 'name' => 'E-Wallets'],
            ['id' => 5, 'name' => 'E-Money'],
        ]);
    }
}
