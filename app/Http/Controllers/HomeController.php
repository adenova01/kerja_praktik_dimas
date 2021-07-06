<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Berita;

class HomeController extends Controller
{
    public function listHoax()
    {
        $title = 'Hoax';
        return view('listHoax', compact('title'));
    }

    public function Home()
    {
        $title = 'Home';
        $berita = Berita::all();
        return view('home', compact('title','berita'));
    }

    public function addNew($id = false)
    {
        $title = 'Add New';
        $kategori = Kategori::all();

        if($id){
            $berita = Berita::where('id_berita', $id)->first();
            return view('new-post', compact('title','kategori','berita'));
        } else {
            return view('new-post', compact('title','kategori'));
        }

    }
}
