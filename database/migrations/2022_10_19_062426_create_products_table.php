<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('price')->default(0);

            $table->foreignIdFor(Brand::class)
                ->nullable()          // может быть пустым после brand_id
                ->constrained()       //внешний ключ, ссылается на таблицу брендов
                //->cascadeOnDelete() // убрал потому что если удалить бренд удалятся и товары
                ->cascadeOnUpdate()
                ->nullOnDelete();     // при удалении у товара бренд будет нулл

            $table->timestamps();
        });

        Schema::create('category_product', function (Blueprint $table){
            $table->id();

            $table->foreignIdFor(Category::class)
                ->constrained()    //внешний ключ, ссылается на таблицу категорий
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreignIdFor(Product::class)
                ->constrained()    //внешний ключ, ссылается на таблицу продуктов
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    public function down()
    {
        if(app()->isLocal()) {
            Schema::dropIfExists('category_product');
            Schema::dropIfExists('products');
        }

    }
};
