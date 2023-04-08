<?php

namespace App\Http\Controllers;

use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function mypatient()
    {
        # code...
        $doctor = Auth::user();
        $myapp = Appointment::where('doctor_id',$doctor->id)->orderBy('date')->get();
        foreach ($myapp as $m) {
            # code...
            $m->date = date("Y-m-d", strtotime($m->date));
        }

        

        return view('patient',compact(['doctor','myapp']));
    }


}
