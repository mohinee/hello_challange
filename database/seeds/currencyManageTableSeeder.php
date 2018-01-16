<?php

use Illuminate\Database\Seeder;

class currencyManageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
          DB::table('currency_manage')->insert([
    		"currency" => "INR",
    		"conversion_rate" => 63.7725,
    		"currency_name"=> 'Indian Rupee']);
    }
}
