<?php

namespace App\Models;

use App\Traits\Models\HasSlug;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'thumbnail',
    ];

    // т.к. в трейте переименовали на bootHasSlug метод boot() свободен,  если понадобится можно использовать

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
