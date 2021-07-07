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
        $listHoax = Berita::where('status','hoax')->get();
        // dd($listHoax);
        return view('listHoax', compact('title','listHoax'));
    }

    public function Home()
    {
        $title = 'Home';
        $berita = Berita::all();
        return view('home', compact('title','berita'));
    }

    public function addNew()
    {
        $title = 'Add New';
        $kategori = Kategori::all();
        return view('new-post', compact('title','kategori'));
    }
}
