<?php

namespace App\Http\Controllers;

use App\Models\tovars;
use Illuminate\Http\Request;

class removeController extends Controller
{
    function remove(){
        session()->flush();
        return redirect()->route('home');
    }
    function remove_bascet(){
        session()->forget('bascet');
        return redirect()->route('home');
    }
    function remove_tovar(Request $data){
        $Received_data = $data -> all();
        tovars::where('id', $Received_data['id'])->delete();
        return redirect()->route('admin_panel');
    }
}