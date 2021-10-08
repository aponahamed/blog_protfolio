<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminBlog extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','post_slug','post_title','post_description','meta_title','meta_description','post_tag','category_title'
    ];

}
