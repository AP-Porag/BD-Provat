<?php

use Illuminate\Database\Seeder;
use App\Models\Group;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Original group
        Group::create([
            'name'=>'dashboard'
        ]);
        Group::create([
            'name'=>'user'
        ]);
        Group::create([
            'name'=>'post'
        ]);
        Group::create([
            'name'=>'category'
        ]);
        Group::create([
            'name'=>'subcategory'
        ]);
        Group::create([
            'name'=>'tag'
        ]);
        Group::create([
            'name'=>'author'
        ]);
        Group::create([
            'name'=>'subscriber'
        ]);
        Group::create([
            'name'=>'advertisement'
        ]);


    }
}
