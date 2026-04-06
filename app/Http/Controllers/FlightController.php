<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
     public function show()
    {
        $flight = Flight::find(1);
        $flight -> name = 'New Flight Name';
        $flight->save();
        
        dd($flight);
    }
}