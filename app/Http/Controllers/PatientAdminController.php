<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Period;
use App\Models\prescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
        $user = Auth::user();
        $user->image = asset($user->image);

        foreach ($dept as $d) {
            # code...
            $d->image = asset($d->image);
        }

        return view('patients.listdept',compact(['dept','user']));

    }
    public function doctorlist($id)
    {
        # code...

        $doctor = User::where('department_id',$id)->where('role',1)->get();
        $user = Auth::user();
        foreach ($doctor as $d) {
            # code...
            $d->image = asset($d->image);
        }
        $user->image = asset($user->image);
        return view('patients.doctor',compact(['doctor','user']));
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
        $app->date = date('Y-m-d ' , strtotime($request->date));
        $app->period_id = $request->period_id;
        $app->save();
        # code...

        return redirect('patientadmin');
    }
    public function periodByDate( Request $request)
    {
        # code...


        $date = date('Y-m-d ' , strtotime($request->date));
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
    public function profile()
    {
        # code...
        $user = Auth::user();
        $user->image = asset($user->image);
        return view('patients.profile',compact('user'));
    }
    public function details()
    {
        # code...
        $user = Auth::user();
        $user->image = asset($user->image);
        return view('patients.details',compact('user'));
    }
    public function history()
    {
        # code...
        $user = Auth::user();
        $apps = Appointment::where('user_id', $user->id)->get();
        $user->image = asset($user->image);


        foreach ($apps as $app) {
            # code...
            $app->Doctor->image = asset($app->Doctor->image);
        }

        return view('patients.history',compact(['apps','user']));
    }
    public function delete($id)
    {
        # code...
        $app = Appointment::where('id' ,$id)->first();
        $app->delete();

        return redirect()->back();
    }
    public function prescriptions()
    {
        # code...
        $user = Auth::user();
        $prescriptions = prescription::where('patient_id',$user->id)->get();
        $user->image = asset($user->image);
        foreach ($prescriptions as $prescription) {
            # code...
            $prescription->Doctorprescription->image = asset( $prescription->Doctorprescription->image);
        }
        return view('patients.prescription',compact(['prescriptions','user']));
    }
    public function myprescription($id)
    {
        # code...
        $prescription = prescription::with('Medicine')->where('id',$id)->first();
        return view('patients.myprescription',compact('prescription'));
    }
}
