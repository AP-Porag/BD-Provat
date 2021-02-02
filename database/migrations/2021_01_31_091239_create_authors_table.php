<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('authors', function (Blueprint $table) {
            $table->id();
            $table->string('thumbnail')->default(asset('frontend/img/272px-90px-Logo.png'));
            $table->string('authorname')->default('ভারপ্রাপ্ত সম্পাদক, কাজী রফিক');
            $table->string('enterprisename')->default('এম, কে, আর এন্টারপ্রাইজের একটি প্রতিষ্ঠান');
            $table->string('enterpriseheadquarter')->default('আলফা টাওয়ার, আবদুল্লাহপুর, উত্তরা, ঢাকা-১২৩০।');
            $table->string('email')->default('bdprovat.news@gmail.com');
            $table->string('mobilenumber')->default('০১৭১৪-০৩৬৬১২');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('authors');
    }
}
