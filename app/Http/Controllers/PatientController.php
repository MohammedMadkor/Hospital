<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...

        $patient = User::where('role',0)->get();
        foreach ($patient as $p) {
            # code...
            $p->image = asset($p->image);
        }
        return view('adminpatient',compact('patient'));
    }
}
