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

    public function list()
    {
        # code...
        $depts = Department::orderByDesc('id')->limit(9)->get();
        $Fdoctors = User::where('role',1)->limit(4)->get();
        $Ldoctors =  User::where('role',1)->orderByDesc('id')->limit(4)->get();
        return view('index',compact(['depts','Fdoctors','Ldoctors']));

    }


}
