<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserLogin;
use App\Models\Berita;

class AuthController extends Controller
{
    public function dataHoax()
    {
        $data = Berita::all();
        return view('data_hoax', compact('data'));
    }

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

    public function logout()
    {
        session()->forget(['nama','id_user']);
        return redirect(url('/'))->with('message','Logout sukses');
    }
}
