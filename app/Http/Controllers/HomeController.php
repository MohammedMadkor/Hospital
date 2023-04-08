<?php
namespace App\Http\Controllers;
use App\Http\Requests\StoreAppointmentRequest;
use App\Models\Appointment;
use App\Models\Department;
use App\Models\Period;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isNull;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function list()
    {
        # code...
        $dept = Department::get();
        return view('index',compact('dept'));

    }
    public function doctorlist($id)
    {
        # code...
        $doctor = User::where('department_id',$id)->where('role',1)->get();
        return view('doctor',compact('doctor'));
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




        return view('appointment',compact(['doctor','auth','avaliblePeriod']));
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

        return redirect('/');
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
}
