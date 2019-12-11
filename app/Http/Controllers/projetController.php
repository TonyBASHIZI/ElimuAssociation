<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\{ Input, Storage };
use Illuminate\Http\Request;
use App\Http\Requests;
use App\projetModel;
use App\partennaireModel;
use App\menuModel;
use App\contactModel;
use Illuminate\Support\Facades\Redirect;

class projetController extends Controller
{
    public function index()
    {
        $logo = contactModel::all();
        $menu = menuModel::all();
        $p = projetModel::paginate(10);
        return view('pagesAdmin/Projets/projet',compact('p','logo'),compact('menu'));
    }
    public function realise()
   {
    $filter = 'Realisé';
    $menu = menuModel::all();
    $logo = contactModel::all();
    // $rel = projetModel::all();
    //  dd($rel);
    $cat = projetModel::where('categorie',$filter)->get();

    return view('pages/projetRealise', compact('cat'),compact('logo','menu'));
   }
   public function cours()
   {
    $filter = 'En cours';

    $menu = menuModel::all();
    $logo = contactModel::all();
   // $rel = projetModel::all();
    $cat = projetModel::where('categorie',$filter)->get();
    //  dd($cat);

    return view('pages/projetEncours', compact('cat'),compact('logo','menu'));
   }
   public function Avenir()
   {
    $filter = 'A venir';

    $menu = menuModel::all();
    $logo = contactModel::all();
   // $rel = projetModel::all();
    $cat = projetModel::where('categorie',$filter)->get();
    //  dd($cat);

    return view('pages/projetAvenir', compact('cat'),compact('logo','menu'));
   }
   public function detailProjet($code)
   {
    $menu= menuModel::all();
    $logo = contactModel::all();
    $detail = projetModel::where('id',$code)->firstOrFail();
    return view('pages/detailProjet', compact('detail'),compact('logo','menu'));
   }
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' =>'required',
            'detail' => 'required',
            'cate' => 'required'

        ]);
        $pros = new projetModel();
        $pros->titre = $request->get('titre');
        $pros->detail = $request->get('detail');
        $pros->categorie = $request->get('cate');
        if ($request->hasFile('photo')) {

            $path = $request->file('photo')->store('upload');
          $pros->image = $path;

          $pros->save();

          return redirect(route('projet'))->with('message', 'Insertion avec succes du project');

        }

    }
    public function edit($id)
   {
    $key = $id;
    $logo = contactModel::all();
    $pedt = projetModel::where('id', $key)->firstOrFail();
    //  dd($produits);

    return view('pagesAdmin/Projets/EditProjet', compact('pedt','logo'));
   }
   public function Modifier(Request $request)
   {
         

    $this->validate($request, [
        'titre' =>'required',
        'detail' => 'required',
        'cate' => 'required',
        'id' => 'required'

    ]);

    $pros = projetModel::findOrFail($request->input('id'));
    // dd($pros);
    $pros->titre = $request->get('titre');
    $pros->detail = $request->get('detail');
    $pros->categorie = $request->get('cate');
    if ($request->hasFile('photo')) {

        $path = $request->file('photo')->store('upload');
      $pros->image = $path;

      $pros->save();

      return redirect(route('projet'))->with('message', 'Modification avec succes du project');

    }
   }
   public function supprimer(Request $request,$id)
   {

      $d = projetModel::where('id', $id);

      $d->delete();

      return redirect(route('projet'))->with('message', 'Suppression avec succes');
   }
}
