<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class adminBlog extends Model
{
    use HasFactory;
    protected $table = 'admin_blogs';
    protected $fillable = [
        'user_id','post_slug','post_title','post_description','meta_title','meta_description'
    ];

    // public function setTitleAttribute($title){
    //     $this->attributes['slug'] = Str::slug($title, '-');
    // }

}
