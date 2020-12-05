<?php

namespace App\Http\Controllers;

class novitasariController extends Controller
{
    public function one()
    {
        return view("novitasari-1");
    }

    public function two()
    {
        return view("novitasari-2");
    }

    public function three()
    {
        return view("novitasari-3");
    }
    public function index()
    {
        return view("test-tema"); // view dengan tamplate
    }
}
