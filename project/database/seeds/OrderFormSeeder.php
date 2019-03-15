<?php

use Illuminate\Database\Seeder;
use App\OrderForm;
class OrderFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 0; $i < 10; $i++) { 
            $status = array("receive", "read", "approved", "refused");
            $rand_status = array_rand($status, 2);
            
            OrderForm::Create([
                'storeID' => ($i +1),
                'status' =>  $status[$rand_status[0]],
                'extra' => Str::random(30),
                'productID' => rand(0,50),
                'amount' => rand(0,100),
                ]);
            }   
    }
}
