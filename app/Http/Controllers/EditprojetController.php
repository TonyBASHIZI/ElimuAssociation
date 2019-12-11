<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditprojetController extends Controller
{
    public function index()
    {
        
        return view('pagesAdmin/Projets/EditProjet');
    }
}
