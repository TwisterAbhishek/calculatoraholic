<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarksUnitController extends Controller
{
    public function cgpatopercentage()
    {
        return view('marksunit.cgpatoper');
    }
    public function percentagetocgpa()
    {
        return view('marksunit.pertocgpa');
    }
}
