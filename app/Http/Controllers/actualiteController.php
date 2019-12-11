<?php

namespace App\Http\Controllers;
use App\actualiteModel;
use Illuminate\Http\Request;

class actualiteController extends Controller
{
   public function index(){
    $actu = actualiteModel::all();

    return view('pagesAdmin/Actualites/actualite', compact('actu'));
   }

   public function store(Request $request)
   {

       $this->validate($request, [
        'titre'=> 'required',
        'fond' => 'required',
        'detail' => 'required',
        'photo' => 'required|image'
       ]);

        $act = new actualiteModel();

        $act->titre = $request->get('titre');
        $act->fond = $request->get('fond');
        $act->detail = $request->get('detail');

        //dd($request->hasFile('photo'));
        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('upload');
          $act->image = $path;
        }
        $act->save();


         return redirect(route('actualite'))->with('message', 'Insertion avec succes');
   }
   public function edit(Request $request, $id)
   {
    $key = $id;

    $p = actualiteModel::where('id', $key)->firstOrFail();
    //  dd($produits);

    return view('pagesAdmin/Actualites/modifierActual', compact('p'));
   }
   public function modifier(Request $request)
   {
    $this->validate($request, [
        'titre'=> 'required',
        'fond' => 'required',
        'detail' => 'required',
        'photo' => 'required'
       ]);

        $key = actualiteModel::where('id', $request->id)->firstOrFail();

        $key->titre = $request->get('titre');
        $key->fond = $request->get('fond');
        $key->detail = $request->get('detail');

        //dd($request->hasFile('photo'));
        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('upload');
          $key->image = $path;
        }
        $key->save();


         return redirect(route('actualite'))->with('message', 'Insertion avec succes');
   }
   public function supprimer(Request $request,$id)
   {

      $d = actualiteModel::where('id', $id);

      $d->delete();

      return redirect(route('actualite'))->with('message', 'Suppression avec succes');
   }
}
