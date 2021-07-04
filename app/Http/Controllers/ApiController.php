<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function cekKata(Request $request)
    {
        $data = [
            "respon" => "200",
            "message" => "sukses",
            "text" => $request->post('kata'),
            "file_content" => file_get_contents($request->post('url'))
        ];

        return response()->json($data);
    }

    public function cekBerita($link)
    {
        $data = [
            "respon" => "200",
            "message" => "sukses",
            // "file_content" => file_get_contents($link)
        ];

        return response()->json($data);
    }
}
