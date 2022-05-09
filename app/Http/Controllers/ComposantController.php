<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComposantController extends Controller
{
    public function adminShowComposants()
    {
        $composants=\App\Models\Composant::with('categorie')->get();
        return view('admin.adminShowComposants', compact('Composants'));
    }

    public function adminShowComposant($id)
    {
        $composant=\App\Models\Composant::where('id',$id)->with('categorie')->first();
        return view('admin.adminShowComposant', compact('Composant'));
    }

  
    public function adminAddComposant()
    {
        $categories=\App\Models\Categorie::all();
        return view('admin.adminAddComposant',compact('categories'));
    }

    public function adminAddComposantPost(Request $request)
    {
        $composant = new \App\Models\Composant();

        $composant->id=$request->id;
        $composant->materiel_id=$request->materiel_id;
        $composant->manuel_maintenance=$request->manuel_maintenance;
        $composant->created_at=$request->created_at;
        $composant->updated_at=$request->updated_at;
        
       

        $composant->save();

        return redirect()->route('adminShowComposants');
    }


    public function adminEditComposant($id)
    {
        $composant=\App\Models\Composant::where('id',$id)->first();
        $categories=\App\Models\Categorie::all();
        return view('admin.adminEditComposant',compact('Composant','categories'));
    }

    public function adminEditComposantPost(Request $request)
    {
        $composant=\App\Models\Composant::where('id',$request->id)->first();

        $composant->id=$request->id;
        $composant->materiel_id=$request->materiel_id;
        $composant->manuel_maintenance=$request->manuel_maintenance;
        $composant->created_at=$request->created_at;
        $composant->updated_at=$request->updated_at;

        $composant->update();

        return redirect()->route('adminShowComposants');
    }


    public function adminDeleteComposant($id)
    {
        $composant=\App\Models\Composant::where('id',$id)->first();
        return view('admin.adminDeleteComposant',compact('Composant'));
    }

    public function adminDeleteComposantPost(Request $request)
    {
        $composant=\App\Models\Composant::where('id',$request->id)->first();
        $composant->delete();

        return redirect()->route('adminShowComposants');
    }



    
}
