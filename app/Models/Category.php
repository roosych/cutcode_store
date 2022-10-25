<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
    ];

    protected static function boot()
    {
        parent::boot();

        // в момент создания категории будет генерироваться слаг (если слага на данный момент нету)
        static::creating(function(Category $category){
            $category->slug = $category->slug ?? str($category->title)->slug();
        });
    }

    public function products()
    {
        return $this->belongsToMany(Product::class);
    }
}
