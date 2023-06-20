<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    //
    public function list()
    {
        # code...
        $appointment = Appointment::get();
        // foreach ($appointment as $a) {
        //     # code...
        //     $a->date = date("Y-m-d", strtotime($a->date));

        // }
        return view('myappointments',compact('appointment'));
    }
}
