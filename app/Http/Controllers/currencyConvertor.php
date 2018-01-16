<?php

namespace App\Http\Controllers;

use Request;
use App\Models\currencyList as currencyList;
use App\Models\currencyManage as currencyManage;
use App\Models\auditLog as auditLog;

class currencyConvertor extends Controller
{
    public function convert(Request $request,$a,$to,$from){
	    		
        auditLog::insert("Conversion request: amount = ".$a." base: ".$from." to: ".$to);

		$toRate = floatval(currencyList::getConversionRates($to)[0]->conversion_rates);
		
		$fromRate = floatval(currencyList::getConversionRates($from)[0]->conversion_rates);

		$convertedAmount = $a * floatval($toRate)/floatval($fromRate);
		
        $conversionRate = $toRate/$fromRate;

		return ['amount' =>$convertedAmount, 'rate' => $conversionRate];
    	
    }

    public function manage(){
        auditLog::insert("Manage currencies");
        
        $currencyManage = currencyManage::getAll();
        
        return view('manage',['currency_manage'=>$currencyManage]);
        
    }

    public function addCurrency(Request $request){
        
        $currencyName = $request::input('currencyName');
        $symbol = $request::input('symbol');
        $conversionRate = $request::input('conversionRate');
        
        auditLog::insert("Manage currencies : add new: currency: ".$symbol." currencyName: ".$currencyName." conversion_rate: ".$conversionRate);
        
        currencyManage::add($symbol,$currencyName,$conversionRate);

        $currencyManage = currencyManage::getAll();
        
        return view('manage',['currency_manage'=>$currencyManage]);
     
    }

    public function resetList(Request $request){
        
        auditLog::insert("Reset currencies");
        
        currencyManage::reset();

        $currencyManage = currencyManage::getAll();
        
        return view('manage',['currency_manage'=>$currencyManage]);   
    }
}
