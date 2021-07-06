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

    public function addNew()
    {
        $title = 'Add New';
        $kategori = Kategori::all();
        return view('new-post', compact('title','kategori'));
    }
}
