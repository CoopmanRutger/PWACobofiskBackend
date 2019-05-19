<?php

use Illuminate\Database\Seeder;
use App\ApplicationForm;
class ApplicationFormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 20; $i++) { 
            $status = array("receive", "read", "approved", "refused");
            $rand_status = array_rand($status, 2);

            $reason = array("1", "2", "3");
            $rand_reason = array_rand($reason, 2);
            
            ApplicationForm::Create([
                'storeId' => rand(1,5),
                'status' =>  $status[$rand_status[0]],
                'reason' =>  $reason[$rand_reason[0]],
                'extra' => Str::random(30),
                'productId' => rand(0,50),
                'amount' => rand(0,100),
                'employeeId' => rand(1,10),
            ]);
        }   
    }
}
