<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TypingTestController extends Controller
{
    public function typingtest()
    {
        return view('tools.typing-test.index');
    }
}
