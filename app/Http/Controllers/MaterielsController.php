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
        return view('admin.adminShowMateriel', compact('materiel'));
    }

    public function adminAddMateriel()
    { 
        return view('admin.adminAddMateriel');
    }
    public function adminAddMaterielPost(Request $request)
    {
        $materiel = new \App\Models\Materiel();

        $materiel->nom=$request->nom;
        $materiel->etat=$request->etat;
        $materiel->scat_id=$request->scat_id;
        $materiel->marque=$request->marque;
        $materiel->date_achat=$request->date_achat;
        $materiel->date_fin_garantie=$request->date_fin_garantie;
        $materiel->date_vie_estime=$request->date_vie_estime;
        $materiel->save();
        return redirect()->route('adminShowMateriels');
    }
    public function adminEditMateriel($id)
    {
        $Materiels =\App\Models\Materiel::where('id',$id)->first();

        return view('admin.adminEditMateriel',compact('Materiels '));
    }
    public function adminEditMaterielPost(Request $request)
    {
        $Materiels=\App\Models\Materiel::where('id',$request->id)->first();
        $materiels->nom=$request->nom;
        $materiels->prix=$request->prix;
        $materiels->etat=$request->etat;
        $materiels->categorie_id=$request->categorie_id;
        $materiels->marque=$request->marque;
        $materiels->date_achat=$request->date_achat;
        $materiels->date_fin_garantie=$request->date_fin_garantie;
        $materiels->date_vie_estime=$request->date_vie_estime;
       
        $materiels ->update();

        return redirect()->route('adminShowMateriels');
}
} 

