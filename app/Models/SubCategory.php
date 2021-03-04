<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function submenus()
    {
        return $this->hasMany(SubMenu::class);
    }
    public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
