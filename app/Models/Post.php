<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    // public static function all()
    // {
    //     return collect(self::$CSC);
    // }

    // public static function find($slug)
    // {
    //     $product = static::all();
    //     return $product->firstWhere('slug', $slug);
    // }


    // public static function url()
    // {
    //     $product = static::all();
    //     return $product->get('slug');
    // }
    use HasFactory;
    // protected $fillable = ['slug', 'title', 'desc'];
    protected $guarded = ['id'];
}
