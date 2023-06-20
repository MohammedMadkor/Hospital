<?php

namespace App\Http\Controllers;

use App\Models\prescription;
use Illuminate\Http\Request;

class LabController extends Controller
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
        return view('lab.index',compact('prescriptions'));
    }
    public function analysis($id)
    {
        # code...
        $prescription = prescription::where('id',$id)->first();
        return view('lab.analysis',compact('prescription'));

    }
}
