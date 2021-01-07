<?php

use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'ঢাকা',
            'slug'=>'ঢাকা',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'রাজশাহী',
            'slug'=>'রাজশাহী',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'খুলনা',
            'slug'=>'খুলনা',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'চট্টগ্রাম',
            'slug'=>'চট্টগ্রাম',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'রংপুর',
            'slug'=>'রংপুর',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'বরিশাল',
            'slug'=>'বরিশাল',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'সিলেট',
            'slug'=>'সিলেট',
        ]);
        SubCategory::create([
            'category_id'=>'4',
            'name'=>'ময়মনসিংহ',
            'slug'=>'ময়মনসিংহ',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'অর্থনীতি',
            'slug'=>'অর্থনীতি',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'আইন আদালত',
            'slug'=>'আইন-আদালত',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'আইন আদালত',
            'slug'=>'আইন-আদালত',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'কৃষিবার্তা',
            'slug'=>'কৃষিবার্তা',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'চাকুরী',
            'slug'=>'চাকুরী',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'শিক্ষা ও সাহিত্য',
            'slug'=>'শিক্ষা-ও-সাহিত্য',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'প্রবাসের খবর',
            'slug'=>'প্রবাসের-খবর',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'ফিচার',
            'slug'=>'ফিচার',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'ভ্রমণ',
            'slug'=>'ভ্রমণ',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'মতামত',
            'slug'=>'মতামত',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'সম্পাদকীয়',
            'slug'=>'সম্পাদকীয়',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'সাক্ষাতকার',
            'slug'=>'সাক্ষাতকার',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'স্বাস্থ্য',
            'slug'=>'স্বাস্থ্য',
        ]);
        SubCategory::create([
            'category_id'=>'11',
            'name'=>'আবহাওয়া',
            'slug'=>'আবহাওয়া',
        ]);
    }
}
