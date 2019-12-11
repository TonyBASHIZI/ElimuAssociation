<?php

namespace App\Http\Controllers;
use \App\actualiteModel;
use \App\partennaireModel;
use \App\menuModel;
use \App\contactModel;
use Illuminate\Http\Request;

class partennaireController extends Controller
{
    public function index()
    {
        $p = partennaireModel::all();
        return view('pagesAdmin/Partennaire/partennaire',compact('p'));
    }

    public function parte(){

      $logo = contactModel::all();
      $tout = partennaireModel::paginate(10);
      $menu = menuModel::all();
     return view('pages/partennaire', compact('logo', 'tout'),compact('menu'));
    }

    public function store(Request $request){
      $this->validate($request,[
        'titre' =>'required',
        'detail' => 'required',
        'photo' => 'required | image'

      ]);

      $part = new partennaireModel();
      if ($request->hasFile('photo')) {

        $path = $request->file('photo')->store('upload');
      $part->logot = $path;
    }
     $part->design = $request->get('titre');
     $part->detail = $request->get('detail');

     $part->save();
     return redirect(route('partennaire'))->with('message', 'Insertion  avec succes');
    }
    public function edit(Request $request, $id)
    {
     $key = $id;

     $p = partennaireModel::where('id', $key)->firstOrFail();
     //  dd($produits);

     return view('pagesAdmin/Partennaire/editpartennaire', compact('p'));
    }

    public function Modifier(Request $request)
    {
        //  dd($request->all());
        $this->validate($request,[
            'titre' =>'required',
            'detail' => 'required',
            'photo' => 'required'

          ]);

          $part = partennaireModel::where('id', $request->id)->firstOrFail();
          if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('upload');
          $part->logot = $path;
        }
         $part->design = $request->get('titre');
         $part->detail = $request->get('detail');

         $part->save();
         return redirect(route('partennaire'))->with('message', 'Modification  avec succes');
    }


}
