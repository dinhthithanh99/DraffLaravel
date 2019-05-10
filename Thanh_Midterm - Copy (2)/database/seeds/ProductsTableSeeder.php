<?php

use Illuminate\Database\Seeder;


class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker\Factory::create();

    	for($i = 0; $i < 10; $i++){
    		DB::table('Products')->insert([
    			// 'code' => $faker->code,
    			'name' => $faker->name,
    			'image' => $faker->image,
    			'price' => $faker->price,
    			'oldprice' => $faker->oldprice,
    			'cate_id'	=>$faker->cate_id
    		]);
    	}
    }
}
