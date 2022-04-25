<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\tovars;
use Illuminate\Http\Request;

class buyController extends Controller
{
    function buy($id){
        if(session()->has('login')){
            $check_tovar = Mod::check_tovar_availability($id);
            if($check_tovar == true){
                if(session()->has('bascet')){
                    $arr = session()->get('bascet');
                    if(in_array($id, $arr)){
                        Mod::session_message('Товар уже в корзине','warning');
                        return redirect()->route('profile');
                    }else{
                        session()->push('bascet', $id);
                        Mod::session_message('Товар добавлен в корзину','warning');
                        return redirect()->route('profile');
                    }
                }else{
                    session()->put('bascet', array($id));
                    return redirect()->route('profile');
                }
            }else{
                Mod::session_message('Такого товара нет','warning');
                return redirect()->route('profile');
            }
        }else{
            Mod::session_message('Авторизуйтесь','warning');
            return redirect()->route('home');
        }
    }
}
