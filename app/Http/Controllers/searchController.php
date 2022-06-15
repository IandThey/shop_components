<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class searchController extends Controller
{
    function search(Request $data){
        $Received_data = $data -> all();
        $search = $Received_data['search'];
        if($search == null){
            session(['search_status' => 0]);
        }else{
            session(['search_status' => 1]);
        }
    }
}
