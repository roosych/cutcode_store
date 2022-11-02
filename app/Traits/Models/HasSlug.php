<?php


namespace App\Traits\Models;


use Illuminate\Database\Eloquent\Model;

trait HasSlug
{
    protected static function bootHasSlug()
    {
        static::creating(function(Model $item){


            $item->slug = $item->slug ??

                str($item->{self::slugFrom()})
                    ->append(time())
                    ->slug();

        });
    }

    // построение слага по имени колонки, вызовом в модели можно переопределять название колонки
    public static function slugFrom(): string
    {
        return 'title';
    }


}