<?php

use Illuminate\Database\Seeder;
use App\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 150; $i++) { 
            $size = array("XS", "S", "M", "L", "XL");
            $rand_size = array_rand($size, 2);
            
            $merk = array("Armani", "Calvin klein", "Hugo Boss", "Nike", "Zara", "H&M");
            $rand_merk = array_rand($merk, 2);
            
            $color = array("Rood", "Geel", "Zwart", "Wit", "Blauw", "Oranje");
            $rand_color = array_rand($color, 2);

            $name = array("Jeans", "Sweater", "Jacket", "Suit", "Shirt", "Polo shirt", "T-shirt", "Shoes", "Boots", "Shorts", "Cap");
            $rand_name = array_rand($name, 2);

        
        
            Product::Create([
                'storeId' => rand(1,5),
                'name' => $name[$rand_name[0]],
                'brand' => $merk[$rand_merk[0]],
                'size' =>  $size[$rand_size[0]],
                'color' => $color[$rand_color[0]],
                'price' => rand(0,100),
                'description' => Str::random(30),
                'amountStock' => rand(30,50),
                'amountMin' => rand(20,40),
                'picture' => "product" . $i,
                ]);
            }   


            // 'email' => Str::random(10).'@gmail.com',
            // 'password' => bcrypt('secret'),

         

        // $reader = new ProductReader();
        // $reader->read(function($data) use ($reader){
            // foreach($data as $line){
                // $record = $reader->mapColumns($line);
                // Product::create($record);
            // }//endforeach

    }
}
