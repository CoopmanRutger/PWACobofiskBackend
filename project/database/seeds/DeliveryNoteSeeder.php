<?php

use Illuminate\Database\Seeder;
use App\DeliveryNote;

class DeliveryNoteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++) { 
            $status = array("in operation", "sent", "delivered");
            $rand_status = array_rand($status, 2);

            $reason = array("1", "2", "3");
            $rand_reason = array_rand($reason, 2);


            $YearDate = date('Y');
            $monthDate = date('m');
            $dayDate = date('d');
            $randomNumber = rand(1,13);
    
            if (($randomNumber + $dayDate) > 29){
                $dayDate = $randomNumber +$dayDate - 29;
                $monthDate ++;
    
                if ($monthDate < 10){
                    $monthDate = '0' . $monthDate;
                }
            }else {
                $dayDate += $randomNumber;
            }
    
            if ($dayDate < 10){
                $dayDate = '0' . $dayDate;
            }
        
            $aDate = $YearDate . '-' . $monthDate . '-' . $dayDate;

            DeliveryNote::Create([
                'storeId' => rand(1,5),
                'status' =>  $status[$rand_status[0]],
                'extra' => Str::random(30),
                'productId' => rand(0,50),
                'amount' => rand(0,100),
                'date' => $aDate,
                ]);
            }   
    }
}
