<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\actualiteModel;
use App\partennaireModel;
use App\projetModel;
use App\membreModel;
use App\menuModel;
use App\contactModel;

class welcomeController extends Controller
{
    public function index()
    {
        $actua = actualiteModel::all();
        $parte = partennaireModel::all();
        $pro = projetModel::all();
        $me = membreModel::all();
        $menu = menuModel::all();
        $logo = contactModel::all();

        return view('welcome', compact('actua', 'parte','pro', 'logo','menu'));
    }

}

