<?php

namespace App\Http\Controllers;
use App\contactModel;
use Illuminate\Http\Request;
use App\menuModel;

class gpsController extends Controller
{
    public function index(){

        $logo = contactModel::all();
        $menu = menuModel::all();
        return view('pages/contact', compact('logo','menu'));
    }
}