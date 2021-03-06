<?php

use App\Models\SubCategory;
use App\Models\SubMenu;
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
            'category_id'=>'3',
            'name'=>'ঢাকা',
            'slug'=>'ঢাকা',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'রাজশাহী',
            'slug'=>'রাজশাহী',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'খুলনা',
            'slug'=>'খুলনা',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'চট্টগ্রাম',
            'slug'=>'চট্টগ্রাম',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'রংপুর',
            'slug'=>'রংপুর',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'বরিশাল',
            'slug'=>'বরিশাল',
        ]);
        SubCategory::create([
            'category_id'=>'3',
            'name'=>'সিলেট',
            'slug'=>'সিলেট',
        ]);
        SubCategory::create([
            'category_id'=>'3',
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

        //sub menu seeder
        //Dhaka
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'ঢাকা',
            'slug'=>'ঢাকা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'গাজীপুর',
            'slug'=>'গাজীপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'নরসিংদী',
            'slug'=>'নরসিংদী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'শরীয়তপুর',
            'slug'=>'শরীয়তপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'নারায়ণগঞ্জ',
            'slug'=>'নারায়ণগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'টাঙ্গাইল',
            'slug'=>'টাঙ্গাইল',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'কিশোরগঞ্জ',
            'slug'=>'কিশোরগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'মানিকগঞ্জ',
            'slug'=>'মানিকগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'মুন্সিগঞ্জ',
            'slug'=>'মুন্সিগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'রাজবাড়ী',
            'slug'=>'রাজবাড়ী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'মাদারীপুর',
            'slug'=>'মাদারীপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'গোপালগঞ্জ',
            'slug'=>'গোপালগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'1',
            'name'=>'ফরিদপুর',
            'slug'=>'ফরিদপুর',
        ]);

        //Rajshahi
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'রাজশাহী',
            'slug'=>'রাজশাহী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'সিরাজগঞ্জ',
            'slug'=>'সিরাজগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'পাবনা',
            'slug'=>'পাবনা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'বগুড়া',
            'slug'=>'বগুড়া',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'নাটোর',
            'slug'=>'নাটোর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'জয়পুরহাট',
            'slug'=>'জয়পুরহাট',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'চাঁপাইনবাবগঞ্জ',
            'slug'=>'চাঁপাইনবাবগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'2',
            'name'=>'নওগাঁ',
            'slug'=>'নওগাঁ',
        ]);

        //Khulna
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'খুলনা',
            'slug'=>'খুলনা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'যশোর',
            'slug'=>'যশোর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'সাতক্ষীরা',
            'slug'=>'সাতক্ষীরা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'মেহেরপুর',
            'slug'=>'মেহেরপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'নড়াইল',
            'slug'=>'নড়াইল',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'চুয়াডাঙ্গা',
            'slug'=>'চুয়াডাঙ্গা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'কুষ্টিয়া',
            'slug'=>'কুষ্টিয়া',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'মাগুরা',
            'slug'=>'মাগুরা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'বাগেরহাট',
            'slug'=>'বাগেরহাট',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'3',
            'name'=>'ঝিনাইদহ',
            'slug'=>'ঝিনাইদহ',
        ]);

        //Chitagong
        //
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'চট্টগ্রাম',
            'slug'=>'চট্টগ্রাম',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'কুমিল্লা',
            'slug'=>'কুমিল্লা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'ফেনী',
            'slug'=>'ফেনী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'ব্রাহ্মণবাড়িয়া',
            'slug'=>'ব্রাহ্মণবাড়িয়া',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'রাঙ্গামাটি',
            'slug'=>'রাঙ্গামাটি',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'নোয়াখালী',
            'slug'=>'নোয়াখালী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'চাঁদপুর',
            'slug'=>'চাঁদপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'লক্ষ্মীপুর',
            'slug'=>'লক্ষ্মীপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'কক্সবাজার',
            'slug'=>'কক্সবাজার',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'খাগড়াছড়ি',
            'slug'=>'খাগড়াছড়ি',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'4',
            'name'=>'বান্দরবান',
            'slug'=>'বান্দরবান',
        ]);

        //Rangpur
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'রংপুর',
            'slug'=>'রংপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'কুড়িগ্রাম',
            'slug'=>'কুড়িগ্রাম',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'পঞ্চগড়',
            'slug'=>'পঞ্চগড়',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'দিনাজপুর',
            'slug'=>'দিনাজপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'লালমনিরহাট',
            'slug'=>'লালমনিরহাট',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'নীলফামারী',
            'slug'=>'নীলফামারী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'গাইবান্ধা',
            'slug'=>'গাইবান্ধা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'5',
            'name'=>'ঠাকুরগাঁও',
            'slug'=>'ঠাকুরগাঁও',
        ]);

        //Barishal
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'6',
            'name'=>'বরিশাল',
            'slug'=>'বরিশাল',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'6',
            'name'=>'পিরোজপুর',
            'slug'=>'পিরোজপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'6',
            'name'=>'পটুয়াখালী',
            'slug'=>'পটুয়াখালী',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'6',
            'name'=>'ঝালকাঠি',
            'slug'=>'ঝালকাঠি',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'6',
            'name'=>'ভোলা',
            'slug'=>'ভোলা',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'6',
            'name'=>'বরগুনা',
            'slug'=>'বরগুনা',
        ]);

        //Shylhet
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'7',
            'name'=>'সিলেট',
            'slug'=>'সিলেট',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'7',
            'name'=>'মৌলভীবাজার',
            'slug'=>'মৌলভীবাজার',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'7',
            'name'=>'হবিগঞ্জ',
            'slug'=>'হবিগঞ্জ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'7',
            'name'=>'সুনামগঞ্জ',
            'slug'=>'সুনামগঞ্জ',
        ]);

        //Maymanshing
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'8',
            'name'=>'ময়মনসিংহ',
            'slug'=>'ময়মনসিংহ',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'8',
            'name'=>'শেরপুর',
            'slug'=>'শেরপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'8',
            'name'=>'জামালপুর',
            'slug'=>'জামালপুর',
        ]);
        SubMenu::create([
            'category_id'=>'3',
            'sub_category_id'=>'8',
            'name'=>'নেত্রকোণা',
            'slug'=>'নেত্রকোণা',
        ]);



    }
}
