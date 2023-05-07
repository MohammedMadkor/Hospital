<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Period;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PatientAdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...
        $dept = Department::get();
        $patient = Auth::user();
        $patient->image = asset($patient->image);

        foreach ($dept as $d) {
            # code...
            $d->image = asset($d->image);
        }

        return view('patients.listdept',compact(['dept','patient']));

    }
    public function doctorlist($id)
    {
        # code...

        $doctor = User::where('department_id',$id)->where('role',1)->get();
        $patient = Auth::user();
        foreach ($doctor as $d) {
            # code...
            $d->image = asset($d->image);
        }
        $patient->image = asset($patient->image);
        return view('patients.doctor',compact(['doctor','patient']));
    }
    public function createappointment($id)
    {
        # code...
        $doctor = User::where('id',$id)->first();

        $auth = Auth::user();

        $period = Period::where('shift_id', $doctor->shift_id)->get();


        $avaliblePeriod = [];

        $busyApp =Appointment::where('doctor_id',$id)->get();




        if ($busyApp->count() > 0) {


            foreach ($period as $p) {

                foreach ($busyApp as $b)
                {
                    if ($p->id != $b->period_id ) {
                        $avaliblePeriod[] = $p ;
                    }
                }
            }

        } else {


            $avaliblePeriod = $period ;

        }




        return view('patients.appointment',compact(['doctor','auth','avaliblePeriod']));
    }
    public function storeappointment( StoreAppointmentRequest $request)
    {
        // dd($request->all());
        $app = new Appointment;
        $app->user_id = $request->user_id;
        $app->doctor_id = $request->doctor_id;
        $app->date = date('Y-m-d H:i:s' , strtotime($request->date));
        $app->period_id = $request->period_id;
        $app->save();
        # code...

        return redirect('patientadmin');
    }
    public function periodByDate( Request $request)
    {
        # code...


        $date = date('Y-m-d H:i:s' , strtotime($request->date));
        $doctor = User::where('id',$request->doctor_id)->first();


        $period = Period::where('shift_id', $doctor->shift_id)->pluck('id')->toArray();
        $busyApp = Appointment::where('doctor_id',$request->doctor_id)->where('date',$date)->pluck('period_id')->toArray();
        $testPeriod = [];
        $avaliblePeriod = [];


        if (isset($busyApp) && !is_null($busyApp)) {
            $testPeriod = array_diff($period,$busyApp);
            foreach($testPeriod as $test){
                $avaliblePeriod []= Period::where('id',$test)->first();
            }
        } else {
            $avaliblePeriod = $period ;
        }
        return $avaliblePeriod ;
        //Done Ya Ryessssssss

    }
    public function profiledoctor($id)
    {
        # code...
        $doctor = User::where('id',$id)->first();
        $doctor->image = asset($doctor->image);
        return view('patients.profiledoctor',compact('doctor'));
    }
}
