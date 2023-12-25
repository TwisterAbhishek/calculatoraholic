<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class FrontController extends Controller
{
    public function home()
    {
        return view('common.home');
    }

    public function tools()
    {
        $q = DB::table('urls')->get();
        return view('common.tools', [
            'tools' => $q
        ]);
    }

    public function privacy()
    {
        return view('policy.privacy');
    }

    public function terms()
    {
        return view('policy.terms');
    }
}
