<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CurrencyManage extends Model
{
   
    public static function getAll(){
    	$currency_manage_list = \DB::table('currency_manage')->get();

        return $currency_manage_list;
    }

    public static function add($currency,$currency_name,$conversion_rate){
    	\DB::table('currency_manage')->insert([
    		"currency" => $currency,
    		"conversion_rate" => $conversion_rate,
    		"currency_name"=> $currency_name
    	]);
    	return;
    }
     
    public static function reset(){
    	\DB::table('currency_manage')->delete();
    	return;
    }  
}
