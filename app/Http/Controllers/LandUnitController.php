<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandUnitController extends Controller
{
    public function landunit()
    {
        return view('tools.land.unitconverter');
    }
}
