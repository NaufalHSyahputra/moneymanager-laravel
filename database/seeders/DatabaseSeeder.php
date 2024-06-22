<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AccountTypeSeeder::class,
            CategoryTypeSeeder::class,
            CurrencySeeder::class,
            PayeeTypeSeeder::class,
            SettingKeySeeder::class,
            SettingSeeder::class,
            CategorySeeder::class
        ]);
    }
}
