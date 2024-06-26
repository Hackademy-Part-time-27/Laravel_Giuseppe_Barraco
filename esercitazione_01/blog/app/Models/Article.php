<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'visible']; 

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

    public static function search($search)
    {
        if($search == '') {
            return [];
        }

        return self::where('title', 'LIKE', "%$search%")->get();          
    }
}