<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setting_keys')->truncate();
        DB::table('setting_keys')->insert([
            [
                'id' => 1,
                'name' => 'user.name',
                'description' => 'User Name',
            ],
            [
                'id' => 2,
                'name' => 'user.email',
                'description' => 'User Email',
            ],
            [
                'id' => 3,
                'name' => 'currency.default',
                'description' => 'Default Currency',
            ],
            [
                'id' => 4,
                'name' => 'period.startofdate',
                'description' => 'Date of Start per period',
            ],
            [
                'id' => 5,
                'name' => 'period.startofdateinweekend',
                'description' => 'If date of Start per period is in weekend',
            ],
            [
                'id' => 6,
                'name' => 'period.startofdateinholiday',
                'description' => 'If date of Start per period is in weekend (Indonesia)',
            ],
        ]);
    }
}
