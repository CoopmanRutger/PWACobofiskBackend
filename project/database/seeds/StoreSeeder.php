<?php

use Illuminate\Database\Seeder;
use App\Store;
class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i < 6 ; $i++) { 
            $merk = array("9000", "8000", "7000", "6000", "5000", "4000");
            $rand_merk = array_rand($merk, 2);
            
            $color = array("Gent", "Brugge", "Antwerpen", "Kortijk");
            $rand_color = array_rand($color, 2);

            $name = array("randomstraat", "kerkstraat", "straat", "brugstraat", "schoolstraat");
            $rand_name = array_rand($name, 2);


            Store::Create([
                'name' => 'winkel' . $i,
                'postal code' => $merk[$rand_merk[0]],
                'town' =>  $color[$rand_color[0]],
                'street' => $name[$rand_name[0]],
                'number' => rand(0,100),
                ]);
            }
          
    }
}
