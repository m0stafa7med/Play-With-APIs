<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //test
    protected $table = 'categories';
    protected $fillable=[
        'name_ar','name_en','created_at','updated_at','active',
    ];
}
