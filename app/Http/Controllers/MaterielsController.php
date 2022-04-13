<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterielsController extends Controller
{
    
    public function adminShowMateriels()
    {
        $materiels=\App\Models\Materiel::all();
        return view('admin.adminShowMateriels', compact('materiels'));
    }

    public function adminShowMateriel($id)
    {
        $materiel=\App\Models\Materiel::where('id',$id)->with('categorie')->first();
        return view('admin.adminShowMateriel', compact('materiels'));
    }

    public function adminAddMateriel()
    { 
        {
            $categories=\App\Models\Categorie::all();
            return view('admin.adminAddMateriel',compact('categories'));
        }
    
    }
    public function adminAddMaterielPost(Request $request)
    {
        $materiel = new \App\Models\Materiel();
       // $materiel->id=$request->id;//
        $materiel->scat_id=$request->scat_id;
        $materiel->nom=$request->nom;
        $produit->categorie_id=$request->categorie_id;
        $materiel->marque=$request->marque;
        $materiel->etat=$request->etat;
        $materiel->date_achat=$request->date_achat;
        $materiel->date_fin_garantie=$request->date_fin_garantie;
        $materiel->date_vie_estime=$request->date_vie_estime;
        $materiel->manuel_maintenance=$request->manuel_maintenance;
        $materiel->save();
        return redirect()->route('adminShowMateriels');
    }
    public function adminEditMateriel($id)
    {
        $materiel =\App\Models\Materiel::where('id',$id)->first();
        $categories=\App\Models\Categorie::all();
        return view('admin.adminEditMateriel',compact('materiel','categories'));
    }
    public function adminEditMaterielPost(Request $request)
    {
        $materiel=\App\Models\Materiel::where('id',$request->id)->first();
        $materiel->scat_id=$request->scat_id;
        $materiel->nom=$request->nom;
        $produit->categorie_id=$request->categorie_id;
        $materiel->marque=$request->marque;
        $materiel->etat=$request->etat;
        $materiel->date_achat=$request->date_achat;
        $materiel->date_fin_garantie=$request->date_fin_garantie;
        $materiel->date_vie_estime=$request->date_vie_estime;
        $materiel->manuel_maintenance=$request->manuel_maintenance;
        $materiel->update();

        return redirect()->route('adminShowMateriels');
}

public function adminDeleteMateriel($id)
{
    $materiel=\App\Models\Materiel::where('id',$id)->first();
    return view('admin.adminDeleteMateriel',compact('materiel'));
}

public function adminDeleteMaterielPost(Request $request)
{
    $materiel=\App\Models\Materiel::where('id',$request->id)->first();
    $materiel->delete();

    return redirect()->route('adminShowMateriels');
 } }