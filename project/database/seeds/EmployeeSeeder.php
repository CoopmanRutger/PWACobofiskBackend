<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) { 
            $function = array("standaard", "manager", "store manager", "information manager", "salesman", "Analist", "CEO");
            $rand_function = array_rand($function, 2);
            
            $choice = array("Ava", "Emily", "Isla", "Amelia", "Olivia", "Oliver", "Harry", "Jack", "Noah", "Jacob");
            $rand_choice = array_rand($choice, 2);
        
            Employee::Create([
                'storeId' => rand(1,5),
                'name' => $choice[$rand_choice[0]],
                'age' => rand(18,65),
                'duty' =>  $function[$rand_function[0]],
                'username' => $choice[$rand_choice[0]],
                'password' => 'password',
                ]);
            }   
    }
}
