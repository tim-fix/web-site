<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
     public function show()
    {
        $flights = Flight::all();
        dd($flights);
        return view('flight.index', ['flights' => $flights]);

        foreach ($flights as $flight) {
  echo $flight->name;
}
    }
}
