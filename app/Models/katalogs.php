<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class katalogs extends Model
{
    use HasFactory;

    protected $guarded = [

    ];
    
    // public function tovars(){
    //     return $this->hasMany('App\tovars');
    // }

    public $timestamps = false;
}
