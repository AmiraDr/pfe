<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategorieController extends Controller
{
    
        public function adminShowCategories()
        {
            $categories=\App\Models\Categorie::with('materiels')->get();
            return view('admin.adminShowCategories', compact('categories'));
        }
    
        public function adminShowCategorie ($id)
        {
            $categorie=\App\Models\Categorie::where('id',$id)->with('materiels')->first();
            return view('admin.adminShowCategorie', compact('categorie'));
        }
        public function adminShowMaterielCategorie($id)
        {
            $materiel=\App\Models\Materiel::where ('categorie_id',$id )->with('categorie')->get();
            return view('admin.adminShowMaterielCategorie', compact('materiels'));
        }
        public function adminDeleteCategorie ($id)
        {
            $materiel=\App\Models\Materiel::where ('categorie_id',$id )->get();
            if ($materiel->count()>0)
            return redirect()->route('adminShowCategories')->with ('successMessage',"la supression est effuctuée par succés.");
        }
}
