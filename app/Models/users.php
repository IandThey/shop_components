<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'login',
        'password',
    ];
    
    public $timestamps = false;

    public function checks(){
        return $this->hasMany('App\checks');
    }
    // public function favorites(){
    //     return $this->hasMany('App\favorites');
    // }
}
