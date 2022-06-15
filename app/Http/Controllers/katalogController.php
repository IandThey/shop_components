<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helper\Mod;
use App\Models\katalogs;

class katalogController extends Controller
{
    function directory_call_go(){
        $katalogs = katalogs::all();
        return view ('katalogs', ['katalogs' => $katalogs]);
    }
}
