<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Products')->insert ([
            ['code'=> '1','name'=>'Áo sơ mi','cate_id' => '2', 'image'=>'sominam.jpg', 'price'=>'180000', 'oldPrice'=>'0'],
            ['code'=> '2','name'=>'Áo sơ form rộng','categories_id' => '1', 'image'=>'somi.jpg', 'price'=>'200000', 'oldPrice'=>'250000'],
            ['code'=> '1','name'=>'Áo sơ mi','cate_id' => '2', 'image'=>'sominam.jpg', 'price'=>'180000', 'oldPrice'=>'0'],
            ['code'=> '2','name'=>'Áo sơ form rộng','categories_id' => '1', 'image'=>'somi.jpg', 'price'=>'200000', 'oldPrice'=>'250000'],
            ['code'=> '1','name'=>'Áo sơ mi','cate_id' => '2', 'image'=>'sominam.jpg', 'price'=>'180000', 'oldPrice'=>'0'],
            ['code'=> '2','name'=>'Áo sơ form rộng','categories_id' => '1', 'image'=>'somi.jpg', 'price'=>'200000', 'oldPrice'=>'250000'],
           ]);

	
    }
}
