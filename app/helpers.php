<?php

use Carbon\Carbon;

if(! function_exists("hello")){

    function hello(){
        echo 'Hello';
    }

}

if(! function_exists("convert")){

    function convert($data){
        
        return Carbon::parse($data)->format('m/d/Y');
        
    }

}


?>