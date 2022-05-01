<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Mod;
use App\Models\katalog;

class katalogController extends Controller
{
    function directory_call_go(){
        $katalog = katalog::all();
        return view ('katalog', ['katalog' => $katalog]);
    }
}
