<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setting_keys')->truncate();
        DB::table('setting_keys')->insert([
            [
                'setting_key_id' => 1,
                'value' => 'Naufal Hakim Syahputra',
            ],
            [
                'setting_key_id' => 2,
                'value' => 'naufalhsyahputra@gmail.com',
            ],
            [
                'setting_key_id' => 3,
                'value' => 'IDR',
            ],
            [
                'setting_key_id' => 4,
                'value' => '25',
            ],
            [
                'setting_key_id' => 5,
                'value' => 'true',
            ],
            [
                'setting_key_id' => 6,
                'value' => 'true',
            ]
        ]);
    }
}
