<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class auditLog extends Model
{
   
    public static function insert($log){
    	\DB::table('audit_log')->insert([
    		"audit_log" => $log
    	]);
    	return;
    }
       
}
