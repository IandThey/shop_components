<?php

namespace App\Http\Controllers;

use App\Helper\Mod;
use App\Models\checks;
use App\Models\tovars;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Mockery\Undefined;

class zakazController extends Controller
{
    function zakaz(){
        $bascet = session()->get('bascet');
        $login = session()->get('login');
        $user = User::where('login',$login)->get();
        $user_id = $user[0]['id'];
        foreach($bascet as $id){
            $count_v = $_GET['count_'.$id];
            if($count_v == null || $count_v == 0){
                $count_v = 1;
            }
            $tovar = tovars::where('id',$id)->get();
            checks::create([
                'login' => $login,
                'name' => $tovar[0]['name_tovar'],
                'price' => $tovar[0]['price_tovar'],
                'count' => $count_v,
                'user_id' => $user_id
            ]);
        }
        session()->forget('bascet');
        Mod::session_message('Заказ добавлен','success');
        return redirect()->route('zakazs');
    }
}
