<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckNewsController extends Controller
{
    public function save_berita(Request $request)
    {
        $title = $request->post('title');
        $link = $request->post('link');
    }
}
