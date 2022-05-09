<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function adminShowReservations()
    {
        $reservations=\App\Models\Reservation::with('categorie')->get();
        return view('admin.adminShowReservations', compact('reservations'));
    }

    public function adminShowReservation($id)
    {
        $reservation=\App\Models\Reservation::where('id',$id)->with('categorie')->first();
        return view('admin.adminShowReservation', compact('reservation'));
    }

  
    public function adminAddReservation()
    {
        $categories=\App\Models\Categorie::all();
        return view('admin.adminAddReservation',compact('categories'));
    }

    public function adminAddReservationPost(Request $request)

    {
        
        $SameReservation=\App\Models\User::where('id',$request->id)->first();
        if (isset($SameReservation) )
        {
            return redirect()->back()->with('ErrorMessage','ce matériel est déja réserver');
        }

    	
        $reservation = new \App\Models\Reservation();
        $reservation->id=$request->id;
        $reservation->employee_id=$request->employee_id;
        $reservation->remarque=$request->remarque;
        $reservation->date_debut_reservation=$request->date_debut_reservation;
        $reservation->date_fin_reservation=$request->date_fin_reservation;
        $reservation->categorie_id=$request->categorie_id;
        $reservation->save();

        return redirect()->route('adminShowReservations');
    }


    public function adminEditReservation($id)
    {
        $reservation=\App\Models\Reservation::where('id',$id)->first();
        $categories=\App\Models\Categorie::all();
        return view('admin.adminEditReservation',compact('reservation','categories'));
    }

    public function adminEditReservationPost(Request $request)
    {
        $reservation=\App\Models\Reservation::where('id',$request->id)->first();

        $reservation->id=$request->id;
        $reservation->employee_id=$request->employee_id;
        $reservation->remarque=$request->remarque;
        $reservation->date_debut_reservation=$request->date_debut_reservation;
        $reservation->date_fin_reservation=$request->date_fin_reservation;
        $reservation->categorie_id=$request->categorie_id;

        $reservation->update();

        return redirect()->route('adminShowReservations');
    }


    public function adminDeleteReservation($id)
    {
        $reservation=\App\Models\Reservation::where('id',$id)->first();
        return view('admin.adminDeleteReservation',compact('reservation'));
    }

    public function adminDeleteReservationPost(Request $request)
    {
        $reservation=\App\Models\Reservation::where('id',$request->id)->first();
        $reservation->delete();

        return redirect()->route('adminShowReservations');
    }
}
