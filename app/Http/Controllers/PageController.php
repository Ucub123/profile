<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function profil()
    {
        return view('profil');
    }

    public function pengalaman()
    {
        return view('pengalaman');
    }

    public function kontak()
    {
        return view('kontak');
    }
}
