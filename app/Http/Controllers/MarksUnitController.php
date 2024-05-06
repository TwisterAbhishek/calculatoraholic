<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksUnitController extends Controller
{
    public function cgpatopercentage()
    {
        return view('tools.marksunit.cgpatoper');
    }
    public function percentagetocgpa()
    {
        return view('tools.marksunit.pertocgpa');
    }
}
