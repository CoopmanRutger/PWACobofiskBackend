<?php

use Illuminate\Database\Seeder;

use App\Form;
class FormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) { 
            $status = array("receive", "read", "approved", "refused", "in operation", "sent", "delivered");
            $rand_status = array_rand($status, 2);
            
            $choice = array("order form", "delivery note", "application form");
            $rand_choice = array_rand($choice, 2);
        
            Form::Create([
                'storeID' => rand(0,50),
                'choice' => $choice[$rand_choice[0]],
                'status' =>  $status[$rand_status[0]],
                'extra' => Str::random(30),
                'productID' => rand(0,50),
                'amount' => rand(0,100),
                ]);
            }   
    }
}
