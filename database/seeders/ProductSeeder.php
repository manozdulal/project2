<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('products')->insert([
        	
         	[
        	"name"=>"lg mobile",
        	"price"=>"1000",
        	"category"=>"mobile",
        	"discription"=>"touch mobile",
        	"gallery"=>"https://www.lg.com/in/images/plp-b2c/banner-2021/wing-offer-new-april-D.jpg",
            ],	

        	[
        	"name"=>"oppo",
        	"price"=>"3000",
        	"category"=>"mobile",
        	"discription"=>"smart mobile",
        	"gallery"=>"https://static.toiimg.com/photo/71851476.cms",	
            ],

            [
            "name"=>"samsung",
            "price"=>"14000",
            "category"=>"tv",
            "discription"=>"smart tv",
            "gallery"=>"https://pisces.bbystatic.com/image2/BestBuy_US/images/products/6268/6268404_sd.jpg",  
            ],

            [
            "name"=>"sony",
            "price"=>"15000",
            "category"=>"tv",
            "discription"=>"smart sony tv",
            "gallery"=>"https://www.kabisewa.com/image/cache/catalog/sony%20tv/sony-led-tv-500x500-493x493.jpg",  
            ],
            
        ]);
    }
}
