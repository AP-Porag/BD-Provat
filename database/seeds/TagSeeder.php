<?php

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
            'name'=>'জাপান',
            'slug'=>'জাপান',
        ]);
        Tag::create([
            'name'=>'কুয়াশা',
            'slug'=>'কুয়াশা',
        ]);
        Tag::create([
            'name'=>'ইসরায়েল',
            'slug'=>'ইসরায়েল',
        ]);
        Tag::create([
            'name'=>'পোশাক',
            'slug'=>'পোশাক',
        ]);
        Tag::create([
            'name'=>'পিকে হালদার',
            'slug'=>'পিকে-হালদার',
        ]);
        Tag::create([
            'name'=>'শংখ ব্যাপারী',
            'slug'=>'শংখ-ব্যাপারী',
        ]);
        Tag::create([
            'name'=>'ইয়াবা জব্দ',
            'slug'=>'ইয়াবা-জব্দ',
        ]);
        Tag::create([
            'name'=>'প্রতিষ্ঠাবার্ষিকী',
            'slug'=>'প্রতিষ্ঠাবার্ষিকী',
        ]);
        Tag::create([
            'name'=>'ওয়াশিংটন',
            'slug'=>'ওয়াশিংটন',
        ]);
        Tag::create([
            'name'=>'সাকিব আল-হাসান',
            'slug'=>'সাকিব-আল-হাসান',
        ]);
        Tag::create([
            'name'=>'ট্রাকচাপা',
            'slug'=>'ট্রাকচাপা',
        ]);
        Tag::create([
            'name'=>'পেঁয়াজ',
            'slug'=>'পেঁয়াজ',
        ]);
        Tag::create([
            'name'=>'জলদস্যু',
            'slug'=>'জলদস্যু',
        ]);
        Tag::create([
            'name'=>'বেক্সিমকো',
            'slug'=>'বেক্সিমকো',
        ]);
        Tag::create([
            'name'=>'আমেরিকা',
            'slug'=>'আমেরিকা',
        ]);
        Tag::create([
            'name'=>'রাষ্ট্রপতি আবদুল হামিদ',
            'slug'=>'রাষ্ট্রপতি-আবদুল-হামিদ',
        ]);
        Tag::create([
            'name'=>'প্রাণ গ্রুপ',
            'slug'=>'প্রাণ-গ্রুপ',
        ]);
        Tag::create([
            'name'=>'সিরিয়া',
            'slug'=>'সিরিয়া',
        ]);
    }
}
