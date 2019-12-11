<?php

namespace App\Http\Controllers;
use App\menuModel;
use App\adhesionModel;
use Illuminate\Http\File;
use Illuminate\Http\Request;
use App\contactModel;
use Illuminate\Support\Facades\Storage;

class adhesionController extends Controller
{
    public function index()
    {
        $logo = contactModel::all();
        $menu= menuModel::all();
        $m = adhesionModel::all();
        return view('pages/adhesion', compact('m','logo'),compact('menu'));
    }

    public function store(Request $request)
    {
        
        $this->validate($request, [
            'name'=> 'required',
            'doc' => 'required',
            'email' => 'required',
            'message' => 'required',
            'photo' => 'required|image',
            'lettre' => 'required'
           ]);
           
        $ad = new adhesionModel();
        if($request->hasFile('doc'))
        {
             
            // Storage::putFileAs('attachments', new File($request->file('attachment')), 'photo.pdf');
             if($request->hasFile('photo')){
                $path = $request->file('photo')->store('upload');
                $ad->photo = $path;
             }
            
            if ($request->hasFile('lettre')) {
                
                $ad->nom = $request->get('name');
                $ad->email = $request->get('email');
                $ad->message = $request->get('message');

                $path = $request->file('lettre')->storeAs('attachments', $request->file('lettre')->getClientOriginalName());
                $ad->piece = $path;
            }
            $path = $request->file('doc')->storeAs('attachments', $request->file('doc')->getClientOriginalName());
            // var_dump($request->all());
            // dd('upload  done');

            $ad->fiche = $path;
            $ad->save();

            return redirect(url(''));
           
        }
       
      
    }
}
