<?php

namespace App\Http\Controllers;
use App\partennaireModel;
use App\menuModel;
use App\contactModel;

use Illuminate\Http\Request;

class detailParteController extends Controller
{
    public function index($code){

        $menu = menuModel::all();
        $logo= contactModel::all();
        $detail = partennaireModel::where('id',$code)->firstOrFail();

        return view('pages/detailPartennaire', compact('logo', 'detail'), compact('menu'));
    }
}
