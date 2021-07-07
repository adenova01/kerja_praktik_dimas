<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\kategori;
use Illuminate\Support\Facades\DB;

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

    public function cekBerita($id)
    {
        $response = [
            'berita' => Berita::where('id_berita', $id)->first(),
            'view' => "url('new-post')"
        ];
        
        return response()->json($response);
        // return view('new-post', compact('title','kategori','berita'));
    }

    public function save_berita(Request $request)
    {
        $data = [
            'text_header' => $request->post('header'),
            'link_berita' => $request->post('link'),
            'id_user'     => $request->post('user_id'),
            'status'      => 'sedang di cek'
        ];

        // if(!@fopen($data['link_berita'], 'r')){
        //     $response = [
        //         'pesan' => 'gagal',
        //         'code'  => 403,
        //     ];
        // } else {
            $insert = Berita::insert($data);
            $id_berita = Berita::max('id_berita');

            $response = [
                'pesan' => 'sukses',
                'code'  => 200,
            ];
        // }

        return response()->json($response);
    }

    public function getBerita()
    {
        $maxId = Berita::max('id_berita');
        $berita = Berita::where('id_berita', $maxId)->first();

        return response()->json($berita);
    }

    public function updateBerita($status, $id)
    {
        $data = [
            'status'  => $status
        ];

        $update = DB::table('berita')
                        ->where('id_berita', $id)
                        ->update($data);

        if($update){
            $response = [
                'pesan' => 'sukses',
                'code'  => 200
            ];
        } else {
            $response = [
                'pesan' => 'gagal',
                'code'  => 403,
            ];
        }

        return response()->json($response);
    }
}
