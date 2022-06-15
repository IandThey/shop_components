<?php

namespace App\Http\Controllers;

use App\Models\tovars;
use Illuminate\Http\Request;

class adminController extends Controller
{
    function add_tovar(Request $data){
        $Received_data = $data ->all();
        $name_tovar = $Received_data['name_tovar'];
        $type_tovar = $Received_data['type_tovar'];
        $price_tovar = $Received_data['price_tovar'];
        $text_tovar = $Received_data['text_tovar'];
        if($text_tovar && $price_tovar && $type_tovar && $name_tovar){
            $a_img_tovar = $data->file('img_tovar')->store('public/img');
            array_push($Received_data, $a_img_tovar);
            $a_img_tovar = str_replace('public/img/','','$a_img_tovar');
            tovars::create([
                'name_tovar' => $Received_data['name_tovar'],
                'type_tovar' => $Received_data['type_tovar'],
                'price_tovar' => $Received_data['price_tovar'],
                'a_img_tovar' => $a_img_tovar,
                'text_tovar' => $Received_data['text_tovar'],
            ]);
            redirect()->route('admin_panel');
        }else{
            redirect()->route('admin_panel');
        }
    }
}