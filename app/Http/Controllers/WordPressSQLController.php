<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WordPressSQLController extends Controller
{
    public function index()
    {
        return view('tools.wpsql.index');
    }

    public function calculate(Request $req)
    {
        return view('tools.wpsql.code', [
            'prev' => $req->p_url,
            'new' => $req->n_url,
        ]);
    }
}
