<?php

use App\Models\Author;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=>'Asraf Porag',
            'email'=>'asraf@aic.mail.com',
            'password'=>Hash::make('asraf@aic.mail.com'),
        ]);
        User::create([
            'name'=>'Razaul Karim',
            'email'=>'razaul@aic.mail.com',
            'password'=>Hash::make('razaul@aic.mail.com'),
        ]);
        Author::create([
            'thumbnail'=>asset('frontend/img/272px-90px-Logo.png'),
            'authorname'=>'ভারপ্রাপ্ত সম্পাদক, কাজী রফিক',
            'enterprisename'=>'এম, কে, আর এন্টারপ্রাইজের একটি প্রতিষ্ঠান',
            'enterpriseheadquarter'=>'আলফা টাওয়ার, আবদুল্লাহপুর, উত্তরা, ঢাকা-১২৩০।',
            'email'=>'bdprovat.news@gmail.com',
            'mobilenumber'=>'০১৭১৪-০৩৬৬১২',
        ]);

    }
}
