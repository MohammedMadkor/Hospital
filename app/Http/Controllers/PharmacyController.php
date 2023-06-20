<?php

namespace App\Http\Controllers;

use App\Models\prescription;
use Illuminate\Http\Request;

class PharmacyController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        # code...
        $prescriptions = prescription::get();
        return view('pharmacy.index',compact('prescriptions'));
    }
    public function medcine($id)
    {
        # code...
        $prescription = prescription::with('Medicine')->where('id',$id)->first();

        return view('pharmacy.medcine',compact('prescription'));
    }
}
