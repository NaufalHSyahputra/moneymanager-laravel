<?php

namespace Database\Seeders;

use App\Models\PayeeType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PayeeTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('payees')->truncate();
        DB::table('payees')->insert([
            [
                'id' => 1,
                'name' => 'Person',
            ],
            [
                'id' => 2,
                'name' => 'Markets',
            ],
            [
                'id' => 3,
                'name' => 'Small Shop',
            ],
            [
                'id' => 4,
                'name' => 'Online Marketplace',
            ],
        ]);
    }
}
