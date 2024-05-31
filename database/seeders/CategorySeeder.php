<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    public function run()
    {
        DB::table('categories')->truncate();
        DB::table('categories')->insert([
            ['id' => 1, 'name' => 'Bills', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 2, 'name' => 'Telephone', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 3, 'name' => 'Electricity', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 4, 'name' => 'Gas', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 5, 'name' => 'Internet', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 6, 'name' => 'Rent', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 7, 'name' => 'Cable TV', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 8, 'name' => 'Water', 'parent_id' => 1, 'category_type_id' => 1],
            ['id' => 9, 'name' => 'Food', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 10, 'name' => 'Groceries', 'parent_id' => 9, 'category_type_id' => 1],
            ['id' => 11, 'name' => 'Dining out', 'parent_id' => 9, 'category_type_id' => 1],
            ['id' => 12, 'name' => 'Leisure', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 13, 'name' => 'Movies', 'parent_id' => 12, 'category_type_id' => 1],
            ['id' => 14, 'name' => 'Video Rental', 'parent_id' => 12, 'category_type_id' => 1],
            ['id' => 15, 'name' => 'Magazines', 'parent_id' => 12, 'category_type_id' => 1],
            ['id' => 16, 'name' => 'Automobile', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 17, 'name' => 'Maintenance', 'parent_id' => 16, 'category_type_id' => 1],
            ['id' => 18, 'name' => 'Gas', 'parent_id' => 16, 'category_type_id' => 1],
            ['id' => 19, 'name' => 'Parking', 'parent_id' => 16, 'category_type_id' => 1],
            ['id' => 20, 'name' => 'Registration', 'parent_id' => 16, 'category_type_id' => 1],
            ['id' => 21, 'name' => 'Education', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 22, 'name' => 'Books', 'parent_id' => 21, 'category_type_id' => 1],
            ['id' => 23, 'name' => 'Tuition', 'parent_id' => 21, 'category_type_id' => 1],
            ['id' => 24, 'name' => 'Others', 'parent_id' => 21, 'category_type_id' => 1],
            ['id' => 25, 'name' => 'Homeneeds', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 26, 'name' => 'Clothing', 'parent_id' => 25, 'category_type_id' => 1],
            ['id' => 27, 'name' => 'Furnishing', 'parent_id' => 25, 'category_type_id' => 1],
            ['id' => 28, 'name' => 'Others', 'parent_id' => 25, 'category_type_id' => 1],
            ['id' => 29, 'name' => 'Healthcare', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 30, 'name' => 'Health', 'parent_id' => 29, 'category_type_id' => 1],
            ['id' => 31, 'name' => 'Dental', 'parent_id' => 29, 'category_type_id' => 1],
            ['id' => 32, 'name' => 'Eyecare', 'parent_id' => 29, 'category_type_id' => 1],
            ['id' => 33, 'name' => 'Physician', 'parent_id' => 29, 'category_type_id' => 1],
            ['id' => 34, 'name' => 'Prescriptions', 'parent_id' => 29, 'category_type_id' => 1],
            ['id' => 40, 'name' => 'Vacation', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 41, 'name' => 'Travel', 'parent_id' => 40, 'category_type_id' => 1],
            ['id' => 42, 'name' => 'Lodging', 'parent_id' => 40, 'category_type_id' => 1],
            ['id' => 43, 'name' => 'Sightseeing', 'parent_id' => 40, 'category_type_id' => 1],
            ['id' => 44, 'name' => 'Taxes', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 45, 'name' => 'Income Tax', 'parent_id' => 44, 'category_type_id' => 1],
            ['id' => 46, 'name' => 'House Tax', 'parent_id' => 44, 'category_type_id' => 1],
            ['id' => 47, 'name' => 'Water Tax', 'parent_id' => 44, 'category_type_id' => 1],
            ['id' => 48, 'name' => 'Others', 'parent_id' => 44, 'category_type_id' => 1],
            ['id' => 49, 'name' => 'Miscellaneous', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 50, 'name' => 'Gifts', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 51, 'name' => 'Income', 'parent_id' => null], 'category_type_id' => 2,
            ['id' => 52, 'name' => 'Salary', 'parent_id' => 51, 'category_type_id' => 2],
            ['id' => 53, 'name' => 'Reimbursement/Refunds', 'parent_id' => 51, 'category_type_id' => 2],
            ['id' => 54, 'name' => 'Investment Income', 'parent_id' => 51, 'category_type_id' => 2],
            ['id' => 55, 'name' => 'Other Income', 'parent_id' => null, 'category_type_id' => 2],
            ['id' => 56, 'name' => 'Other Expenses', 'parent_id' => null, 'category_type_id' => 1],
            ['id' => 57, 'name' => 'Transfer', 'parent_id' => null, 'category_type_id' => 3],
        ]);
    }
}
