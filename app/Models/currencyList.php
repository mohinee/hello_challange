<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class currencyList extends Model
{
   
    public static function getCurrency(){
    	$currency = \DB::table('currency_list')->pluck('currency');

        return $currency;
    }

 	public static function getConversionRates($currency){
    	$conversionRate = \DB::table('currency_list')->where('currency', $currency)->get(['conversion_rates']);
        return $conversionRate;
    }
       
}
