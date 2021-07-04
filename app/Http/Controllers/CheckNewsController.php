<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckNewsController extends Controller
{
    public function check(Request $request)
    {
        $title = $request->post('title');
        $link = $request->post('link');
    }
}
