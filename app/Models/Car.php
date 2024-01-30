<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Car extends Model
{
    use HasFactory;
    //names from database
    protected $fillable = [
        'title',
        'price',
        'luggages',
        'doors',
        'passengers',
        'content',
        'active',
        'image',
        'category_id',
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
