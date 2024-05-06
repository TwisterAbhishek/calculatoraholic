<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request, DB;

class FrontController extends Controller
{
    public function home()
    {
        $trending = DB::table('urls')
                    ->where('trending', 1)
                    ->get();
        return view('common.home', [
            'trending' => $trending
        ]);
    }

    public function tools()
    {
        return view('tools.toolsPage');
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
