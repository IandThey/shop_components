<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\tovars;
use Illuminate\Http\Request;

class profileController extends Controller
{
    function profileLoad(){
        if(session()->has('login')){
            $arr = session()->get('bascet');
            $tovars = array();
            if($arr == null){
                return view('home', ['tovars' => $tovars]);
            }
            foreach($arr as $elem){
                array_push($tovars, tovars::where('id',$elem)->get());
            }
            return view('home', ['tovars' => $tovars]);
        }else{
            return view('home');
        }
    }
}