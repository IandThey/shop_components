<?php

namespace App\Http\Controllers;

use App\Models\checks;
use Illuminate\Http\Request;

class zakazsController extends Controller
{
    function load_zakazs(){
        $login = session()->get('login');
        $zakazs = checks::where('login', $login)->get();
        return view('zakazs',['zakazs' => $zakazs]);
    }
    // function load_zakazs(){
    //     $login = session()->get('login');
    //     $user = User::where('login',$login)->get();
    //     $zakazs = $user['id']->check;
    //     $zakazs = checks::where('login', $login)->get();
    //     return view('zakazs',['zakazs' => $zakazs]);
    // }
}
