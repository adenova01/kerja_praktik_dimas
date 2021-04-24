<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('home', compact('title'));
    }

    public function addNew()
    {
        $title = 'Add New';
        return view('new-post', compact('title'));
    }
}
