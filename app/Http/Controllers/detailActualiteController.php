<?php

namespace App\Http\Controllers;
use App\actualiteModel;
use App\menuModel;
use App\contactModel;
use Illuminate\Http\Request;

class detailActualiteController extends Controller
{
    public function index(string $code)
    {

        $menu= menuModel::all();
        $logo= contactModel::all();
        $detail = actualiteModel::where('id',$code)->firstOrFail();
        // dd($produit);
        //  dd($detail);

        return view('pages/detailActualite', compact('detail', 'menu'),compact('logo'));
    }
}
