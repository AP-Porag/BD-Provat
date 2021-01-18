<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'জাতীয়',
            'slug' => 'জাতীয়',
        ]);
        Category::create([
            'name' => 'রাজনীতি',
            'slug' => 'রাজনীতি',
        ]);
        Category::create([
            'name' => 'সারাদেশ',
            'slug' => 'সারাদেশ',
        ]);
        Category::create([
            'name' => 'আন্তর্জাতিক',
            'slug' => 'আন্তর্জাতিক',
        ]);
        Category::create([
            'name' => 'আইন/আদালত',
            'slug' => 'আইন-আদালত',
        ]);
        Category::create([
            'name' => 'বিনোদন',
            'slug' => 'বিনোদন',
        ]);
        Category::create([
            'name' => 'খেলাধুলা',
            'slug' => 'খেলাধুলা',
        ]);
        Category::create([
            'name' => 'তথ্যপ্রযুক্তি',
            'slug' => 'তথ্যপ্রযুক্তি',
        ]);
        Category::create([
            'name' => 'লাইফস্টাইল',
            'slug' => 'লাইফস্টাইল',
        ]);
        Category::create([
            'name' => 'ধর্ম',
            'slug' => 'ধর্ম',
        ]);
        Category::create([
            'name' => 'আরো',
            'slug' => 'আরো',
        ]);
    }
}
