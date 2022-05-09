<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MaintenanceController extends Controller
{
    //class MaintenanceController extends Controller

    public function adminShowMaintenances()
    {
        $maintenances=\App\Models\Maintenance::with('categorie')->get();
        return view('admin.adminShowMaintenances', compact('maintenances'));
    }

    public function adminShowMaintenance($id)
    {
        $maintenance=\App\Models\Maintenance::where('id',$id)->with('categorie')->first();
        return view('admin.adminShowMaintenance', compact('maintenance'));
    }

  
    public function adminAddMaintenance()
    {
        $categories=\App\Models\Categorie::all();
        return view('admin.adminAddMaintenance',compact('categories'));
    }

    public function adminAddMaintenancePost(Request $request)
    {
        $maintenance = new \App\Models\Maintenance();

        $maintenance->id=$request->id;
        $maintenance->materiel_id=$request->materiel_id;
        $maintenance->agent_id=$request->agent_id;
        $maintenance->categorie_id=$request->categorie_id;
        $maintenance->maintenance=$request->maintenance;
        $maintenance->facture=$request->facture;
        $maintenance->description=$request->description;
        $maintenance->prix=$request->prix;
        
        $maintenance->save();

        return redirect()->route('adminShowMaintenances');
    }
    public function adminEditMaintenance($id)
    {
        $maintenance=\App\Models\Maintenance::where('id',$id)->first();
        $categories=\App\Models\Categorie::all();
        return view('admin.adminEditMaintenance',compact('maintenance','categories'));
    }

    public function adminEditMaintenancePost(Request $request)
    {
        $maintenance=\App\Models\Maintenance::where('id',$request->id)  ->first();
        $maintenance->id=$request->id;
        $maintenance->materiel_id=$request->materiel_id; 
        $maintenance->categorie_id=$request->categorie_id;
          $maintenance->facture=$request->facture;
        $maintenance->description=$request->description;
        $maintenance->prix=$request->prix;

        $maintenance->update();

        return redirect()->route('adminShowMaintenances');
    }


}
