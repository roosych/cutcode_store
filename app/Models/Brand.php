<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
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

        // в момент создания бренда будет генерироваться слаг (если слага на данный момент нету)
        static::creating(function(Brand $brand){
            $brand->slug = $brand->slug ?? str($brand->title)->slug();
        });
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
