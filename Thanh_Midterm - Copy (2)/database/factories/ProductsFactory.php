<?php
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;


// $factory->define(App\Model\Product::class, function (Faker $faker) {
$factory->define(Product::class, function (Faker $faker) {

    return [
        'name' => $faker->unique(),
        'code' => $faker->code,
        'image' => $faker->image,
        'price' => $faker->price,
        'oldprice' => $faker->oldprice
    	'cate_id'	=>$faker->cate_id;

    ];
});


