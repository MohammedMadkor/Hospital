<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditDoctorRequest;
use App\Http\Resources\AppointmentResource;
use App\Models\Appointment;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function appointment()
    {
        # code...
        $today = Carbon::now()->format('Y-m-d');
        // dd($today);

        $doctor = Auth::user();
        $doctor->image = asset($doctor->image);
        $myapp = Appointment::where('doctor_id',$doctor->id)->where('date',$today)->orderBy('period_id')->get();
        foreach ($myapp as $app) {
            # code...
            $app->User->image = asset($app->User->image);
        }




        return view('DoctorAdmin.appointment',compact(['doctor','myapp']));
    }
    public function mypatient()
    {
        # code...
        $users = [];
        $doctor = Auth::user();
        $doctor->image = asset($doctor->image);
        $apps = Appointment::with('User')->where('doctor_id',$doctor->id)->get();

        foreach($apps as $app){
            if(!in_array($app->User ,$users)){
                $users[] = $app->User;
            }
        }
        foreach ($users as $user) {
            $user->image = asset( $user->image);
        }

        return view('DoctorAdmin.mypatient',compact(['doctor','users']));
    }
    public function details()
    {
        # code...
        $doctor = Auth::user();
        $doctor->image = asset( $doctor->image);
        return view('DoctorAdmin.details',compact('doctor'));

    }
    public function edit(EditDoctorRequest $request , $id)
    {
        # code...
        $doctor = User::where('id',$id)->first();
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            $doctor->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'age' => $request->age,
                'address' => $request->address,
                'image' => $path,
            ]);

        } else {
            $doctor->update([
                'name' => $request->name,
                'phone' => $request->phone,
                'age' => $request->age,
                'address' => $request->address,
            ]);
        }

        return redirect('DoctorAdmin/details');

    }


}
