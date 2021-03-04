<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubMenu extends Model
{
    protected $guarded = [];

    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class);
    }
}
