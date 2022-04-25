<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\tovars;
use App\Models\User;
use Illuminate\Http\Request;

class profileController extends Controller
{
    function profileLoad(){
        if(session()->has('login')){
            $arr = session()->get('bascet');
            $tovars = array();
            if($arr == null){
                return view('profile', ['tovars' => $tovars]);
            }
            foreach($arr as $elem){
                array_push($tovars, tovars::where('id',$elem)->get());
            }
            return view('profile', ['tovars' => $tovars]);
        }else{
            Mod::session_message('Авторизуйтесь','warning');
            return redirect()->route('home');
        }
    }
}
