<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;

class AuthController extends Controller
{
    public function cek_login(Request $request)
    {
        $login = [
            'username' => $request->post('username'),
            'password' => $request->post('password'),
        ];

        $cek_login = UserLogin::where($login)->first();

        if($cek_login != null){
            session([
                'nama' => $cek_login->nama,
                'id_user' => $cek_login->id,
            ]);
            return redirect(url('home'));
        } else {
            return redirect(url('/'))->with('message','Login gagal password / username salah');
        }
    }
}
