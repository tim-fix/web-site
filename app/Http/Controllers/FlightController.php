<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use App\Models\Flight;

class FlightController extends Controller
{

public function show(Request $request )
    {
        $flight = new Flight;
        $flight->name = $request->name;
        $flight->save();
    }
}