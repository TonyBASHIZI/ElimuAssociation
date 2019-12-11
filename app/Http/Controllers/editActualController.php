<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editActualController extends Controller
{
    public function index()
    {
        return view('pagesAdmin/Actualites/modifierActual');
    }
}
