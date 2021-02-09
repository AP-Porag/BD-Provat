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

        //Author Seeder
        Author::create([
            'authorname'=>'ভারপ্রাপ্ত সম্পাদক, কাজী রফিক',
        ]);

    }
}
