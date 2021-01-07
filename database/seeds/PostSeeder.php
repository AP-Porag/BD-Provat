<?php

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'category_id'=>rand(1,12),
            'sub_category_id'=>rand(1,22),
            'post_author'=>rand(3,12),
            'title'=>'দেশের ৩ বিভাগে বৃষ্টির আভাস',
            'slug'=>'দেশের-৩-বিভাগে-বৃষ্টির-আভাস',
            'content'=>'<strong>বিডি প্রভাত, ডেস্ক:</strong> রংপুর, রাজশাহী ও ময়মনসিংহ বিভাগের দু-এক জায়গায় হালকা বা গুঁড়িগুঁড়ি বৃষ্টি হতে পারে। সোমবার (৪ জানুয়ারি) সন্ধ্যায় এ তথ্য জানিয়েছে আবহাওয়া অধিদফতর। সন্ধ্যা ৬টা থেকে পরবর্তী ২৪ ঘণ্টার পূর্বাভাসে বলা হয়েছে, অস্থায়ীভাবে ',
            'status'=>'published',
            'thumbnail'=>'https://bdprovat.news/wp-content/uploads/2021/01/15-1.jpg',
        ]);
        Post::create([
            'category_id'=>rand(1,12),
            'sub_category_id'=>rand(1,22),
            'post_author'=>rand(3,12),
            'title'=>'জুলিয়ান অ্যাসাঞ্জের হস্তান্তর আটকে দিল ব্রিটেন',
            'slug'=>'জুলিয়ান-অ্যাসাঞ্জের-হস্তান্তর-আটকে-দিল-ব্রিটেন',
            'content'=>'<strong>অনলাইন ডেস্কঃ</strong> উইকিলিকসের প্রতিষ্ঠাতা জুলিয়ান অ্যাসাঞ্জকে যুক্তরাষ্ট্রে হস্তান্তর আটকে দিয়েছে যুক্তরাজ্য। তাকে যুক্তরাষ্ট্রে হস্তান্তরের বিষয়ে সোমবার এই রায় ঘোষণা করেছে লন্ডনের একটি আদালত। খবর বিবিসির।

অ্যাসাঞ্জের বর্তমান মানসিক অবস্থার',
            'status'=>'published',
            'thumbnail'=>'https://bdprovat.news/wp-content/uploads/2021/01/Bdprovat-Final-Share-Logo-copy-63.jpg',
        ]);
        Post::create([
            'category_id'=>rand(1,12),
            'sub_category_id'=>rand(1,22),
            'post_author'=>rand(3,12),
            'title'=>'হাম-রুবেলার টিকা নেয়ার পর এক শিশুর মৃত্যু',
            'slug'=>'হাম-রুবেলার-টিকা-নেয়ার-পর-এক-শিশুর-মৃত্যু',
            'content'=>'<strong>নিজস্ব প্রতিবেদকঃ</strong> টাঙ্গাইলের ঘাটাইলে হাম-রুবেলার টিকা নেয়ার এক ঘণ্টা পর পাপিয়া নামের ১০ বছরের এক শিশুর মৃত্যু হয়েছে বলে অভিযোগ পাওয়া গেছে।

সোমবার (৪ জানুয়ারি) সকালে উপজেলার দেওপাড়া ইউনিয়নের গানজানা স্বনির্ভর সূর্যের হাসি ক্লিনিকে এই ঘট',
            'status'=>'published',
            'thumbnail'=>'https://bdprovat.news/wp-content/uploads/2021/01/Bdprovat-Final-Share-Logo-copy-62.jpg',
        ]);
        Post::create([
            'category_id'=>rand(1,12),
            'sub_category_id'=>rand(1,22),
            'post_author'=>rand(3,12),
            'title'=>'মান্দায় ছাত্রলীগের ৭৩ তম প্রতিষ্ঠা বার্ষিকী পালিত',
            'slug'=>'মান্দায়-ছাত্রলীগের-৭৩-তম-প্রতিষ্ঠা-বার্ষিকী-পালিত',
            'content'=>'<strong>মোঃ রায়হান আলী, মান্দাঃ </strong>শিক্ষা শান্তি ও প্রগতির শ্লোগান নিয়ে প্রতিষ্ঠিত ঐতিহ্যবাহী ছাত্র সংগঠন ছাত্রলীগের ৭৩ তম প্রতিষ্ঠা বার্ষিকী পালন করা হয়েছে।

সোমবার (৪ঠা জানুয়ারী) বিকেলে মান্দা উপজেলার কসবা-মান্দা বঙ্গবন্ধু স্মৃতি সংসদ অফিসে ভারশ',
            'status'=>'published',
            'thumbnail'=>'https://bdprovat.news/wp-content/uploads/2021/01/Bdprovat-Final-Share-Logo-copy-61.jpg',
        ]);
        Post::create([
            'category_id'=>rand(1,12),
            'sub_category_id'=>rand(1,22),
            'post_author'=>rand(3,12),
            'title'=>'শ্রীনগর উপজেলা চেয়ারম্যানের উদ্যোগে ছাত্রলীগে প্রতিষ্ঠা বার্ষিকী উদযাপন',
            'slug'=>'শ্রীনগর-উপজেলা-চেয়ারম্যানের-উদ্যোগে-ছাত্রলীগে-প্রতিষ্ঠা-বার্ষিকী-উদযাপন',
            'content'=>'<strong>সুমন আহমেদ, (শ্রীনগর মুন্সিগঞ্জ) প্রতিনিধি:</strong> মুন্সিগঞ্জের শ্রীনগরে বর্ণাঢ্য আয়োজনে উপজেলা চেয়ারম্যান মোঃ মসিউর রহমান মামুন এর উদ্যোগে ছাত্র লীগের ৭৩ তম প্রতিষ্ঠাবার্ষিকী পালন করা হয়।

৪ জানোয়ারী সোমবার বিকাল ০৪ ঘটিকায় শ্রীনগর উপজেলা চেয়া',
            'status'=>'published',
            'thumbnail'=>'https://bdprovat.news/wp-content/uploads/2021/01/29-1.jpg',
        ]);

    }
}
