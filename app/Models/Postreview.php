<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postreview extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email','message','post_slug','rattings'
    ];
}
