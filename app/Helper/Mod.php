<?php

namespace App\Helper;

use App\Models\tovars;
use Illuminate\Http\Request;

class Mod{

    public static function session_message($message, $type){
        session([
            'alert' => $message, 
            'alert_type' => $type
        ]);
    }

    public static function session_profile_add($login, $password){
        session([
            'login' => $login,
            'password' => $password
        ]);
    }

    public static function check_tovar_availability($id){
        if(tovars::where('id',$id)->exists()){
            return true;
        }else{
            return false;
        }
    }
}
?>