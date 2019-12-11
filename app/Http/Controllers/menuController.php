<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\{ Input, Storage };
use Illuminate\Http\Request;
use App\Http\Requests;
use App\menuModel;

class menuController extends Controller
{
    public function index()
    {

        $m = menuModel::all();
        // dd($m);

        return view('pagesAdmin/Menu/menu', compact("m"));
    }
    public function edit(Request $request, $id){
        $key = $id;

        $menus = menuModel::where('id', $key)->firstOrFail();
        //  dd($produits);

        return view('pagesAdmin/Menu/menu', compact('menus'));
    }
    public function update(Request $request)
    {
       // dd($request->all());
        $this->validate($request, [
             'home' => 'required',
             'actualite' => 'required',
             'nous' => 'required',
             'enfant' => 'required',
             'partenaire' => 'required'
        ]);

        $menu = menuModel::where('id',$request->id)->firstOrFail();

        $menu->home = $request->get('home');
        $menu->actualite = $request->get('actualite');
        $menu->partenaire = $request->get('partenaire');
        $menu->nous = $request->get('nous');
        $menu->enfant = $request->get('enfant');

        $menu->save();

        return redirect(route('menu'))->with('message', 'Modification des menus avec succes');
    }
}
