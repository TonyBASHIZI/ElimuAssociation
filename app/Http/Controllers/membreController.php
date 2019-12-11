<?php

namespace App\Http\Controllers;
use App\membreModel;
use App\projetModel;
use Illuminate\Http\Request;

class membreController extends Controller
{
    public function index()
    {

        $p = membreModel::all();
        return view('pagesAdmin/Membre/membre', compact('p'));
    }

    public function store(Request $request)
    {

        $this->validate($request,[

            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'email' => 'required'
        ]);

        $mm = new membreModel();
        $mm->nom = $request->get('nom');
        $mm->postnom =$request->get('postnom');
        $mm->prenom =$request->get('prenom');
        $mm->categorie = $request->get('cate');
        $mm->email = $request->get('email');

        if ($request->hasFile('photo')) {
            // dd($mm);
            $path = $request->file('photo')->store('upload');
          $mm->photo = $path;

          $mm->save();

          return redirect(route('membre'))->with('message', 'Insertion nouveau membre  avec succes');
        }
    }
    public function edit(Request $request, $id)
    {
        $k = $id;
        $p = membreModel::all();

        $m = membreModel::where('id', $k)->firstOrFail();

        return view('pagesAdmin/Membre/editMembre',compact('m','p'));

    }

    public function Modifier(Request $request)
    {
        $this->validate($request,[

            'nom' => 'required',
            'postnom' => 'required',
            'prenom' => 'required',
            'email' => 'required'
        ]);

        $mod = membreModel::where('id',$request->id)->firstOrFail();
        $mod->nom = $request->get('nom');
        $mod->postnom =$request->get('postnom');
        $mod->prenom =$request->get('prenom');
        $mod->categorie = $request->get('cate');
        $mod->email = $request->get('email');

        if ($request->hasFile('photo')) {
            // dd($mm);
            $path = $request->file('photo')->store('upload');
          $mod->photo = $path;

          $mod->save();

          return redirect(route('membre'))->with('message', 'Insertion nouveau membre  avec succes');
        }


    }
}
