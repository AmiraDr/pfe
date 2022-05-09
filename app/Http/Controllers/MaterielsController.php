<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaterielsController extends Controller
{
    
    public function adminShowMateriels()
    {
        $materiels=\App\Models\Materiel::with('categorie')->get();
        return view('admin.adminShowMateriels', compact('materiels'));
    }
    public function adminShowMateriels_composant($composant_id)
    {
        $materiels=\App\Models\Materiel::where('composant_id',$composant_id)->with('composant')->get();
        return view('admin.adminShowMateriels_composant', compact('materiels'));
    }

    public function adminShowMateriel($id)
    {
        $materiel=\App\Models\Materiel::where('id',$id)->with('categorie')->first();
        return view('admin.adminShowMateriel', compact('materiel'));
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
        $materiel->id=$request->id;
        $materiel->scat_id=$request->scat_id;
        $materiel->composant_id=$request->composant_id;
        $materiel->nom=$request->nom;
        $materiel->categorie_id=$request->categorie_id; 
        $materiel->marque=$request->marque;
        $materiel->etat=$request->etat;
        $materiel->date_achat=$request->date_achat;
        $materiel->date_fin_garantie=$request->date_fin_garantie;
        $materiel->date_vie_estime=$request->date_vie_estime;
        $materiel->manuel_maintenance=$request->manuel_maintenance;
        $materiel->quantite_stock=$request->quantite_stock;

        
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
        $materiel->composant_id=$request->composant_id;
        $materiel->nom=$request->nom;
        $materiel->categorie_id=$request->categorie_id;
        $materiel->marque=$request->marque;
        $materiel->etat=$request->etat; 
        $materiel->date_achat=$request->date_achat;
        $materiel->date_fin_garantie=$request->date_fin_garantie;
        $materiel->date_vie_estime=$request->date_vie_estime;
        $materiel->manuel_maintenance=$request->manuel_maintenance;
        $materiel->quantite_stock=$request->quantite_stock;
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
 } 
 public function adminReserverMateriel()
 { 
     {
         $categories=\App\Models\Categorie::all();
         return view('admin.adminReserverMateriel',compact('categories'));
     }
 
 }
 public function adminReserverMaterielPost(Request $request)
  
 {
    
    $SameMateriel=\App\Models\User::where('id',$request->id)->first();
    if (isset($SameMateriel) )
    {
        return redirect()->back()->with('ErrorMessage',' ce matériel est géja réserver');
    }

     $materiel = new \App\Models\Materiel();
     $materiel->id=$request->id;
     $materiel->composant_id=$request->composant_id;
     $materiel->scat_id=$request->scat_id;
     $materiel->nom=$request->nom;
     $materiel->categorie_id=$request->categorie_id; 
     $materiel->marque=$request->marque;
     $materiel->etat=$request->etat;
     $materiel->date_achat=$request->date_achat;
     $materiel->date_fin_garantie=$request->date_fin_garantie;
     $materiel->date_vie_estime=$request->date_vie_estime;
     $materiel->manuel_maintenance=$request->manuel_maintenance;
     $materiel->quantite_stock=$request->quantite_stock;
     
     $materiel->reserverM();

     return redirect()->route('adminShowMateriels');
 }

 //For user
 public function userShowMateriels()
    {
        $materiels=\App\Models\Materiel::with('categorie')->get();
        return view('user.userShowMateriels', compact('materiels'));
    }

    public function userShowMateriel($id)
    {
        $materiel=\App\Models\Materiel::where('id',$id)->with('categorie')->first();
        return view('user.userShowMateriel', compact('materiel'));
    }

}