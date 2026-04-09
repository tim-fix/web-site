<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneController extends Controller
{
     public function phone() 
    {
        return $this->hasOne('App\Models\Phone');
        dd($phone);
        
    }
}
