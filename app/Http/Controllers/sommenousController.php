<?php

namespace App\Http\Controllers;
use App\sommenousModel;
use App\menuModel;
use App\membreModel;
use App\contactModel;
use Illuminate\Http\Request;

class sommenousController extends Controller
{
    public function index()
    {
        $logo = contactModel::all();
        $menu= menuModel::all();
        $nous = sommenousModel::all();
        return view('pages/sommesnous', compact('nous', 'menu'),compact('logo'));
    }

    public function membre(){
        $menu= menuModel::all();
        $me = membreModel::all();
        $logo = contactModel::all();
        return view('pages/membre', compact('me', 'menu'),compact('logo'));

    }
    public function statut(){
        $menu= menuModel::all();
        $logo = contactModel::all();
        $nous = sommenousModel::all();
        return view('pages/statut', compact('nous', 'menu'),compact('logo'));

    }
    public function reglement(){
        $menu= menuModel::all();
        $logo = contactModel::all();
        $nous = sommenousModel::all();
        return view('pages/reglement', compact('nous', 'menu'),compact('logo'));

    }
}
