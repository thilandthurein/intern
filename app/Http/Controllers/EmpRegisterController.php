<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
class EmpRegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function empindex(Request $request){
        $input=$request->all();
        //return ($input);
        $text="Please enter;";
        foreach ($input as $key => $value) {
            if($value==""){
                $text.=$key.",";
            }
        }
        return rtrim($text,',').".";
}
}