<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'content', 'slug'];

    public static function generateSlug($title) //function that generate slug and can be used in various pages
    {
        return Str::slug($title, '-');
    }
}
