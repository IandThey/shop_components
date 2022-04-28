<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Mod;
use App\Models\go_katalogs;

class katalogController extends Controller
{
    function directory_call_go(){
        $katalog = go_katalogs::all();
        return view ('katalog', ['katalog' => $katalog]);
    }
}
