<?php

namespace App\Http\Controllers;

use App\Models\prescription;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPrescription extends Controller
{
    //
    public function list()
    {
        # code...
        $prescription =prescription::orderBy('date')->get();
        return view('prescription.adminprescription',compact('prescription'));


    }
    public function viewprescription($id)
    {
        # code...
        $prescription = prescription::with('Medicine')->where('id' , $id)->first();
        $doctor = User::where('id',$prescription->doctor_id)->first();
        
        return view('prescription.listadminprescription',compact(['prescription','doctor']));
    }
}
