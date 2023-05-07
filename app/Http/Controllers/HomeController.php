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
        $dept = Department::get();
        return view('index',compact('dept'));

    }

    
}
