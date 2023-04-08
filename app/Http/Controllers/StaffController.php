<?php

namespace App\Http\Controllers;

use App\Http\Requests\DoctorLoginRequest;
use App\Http\Requests\EditStaffRequest;
use App\Http\Requests\storeStaffRequest;
use App\Models\Department;
use App\Models\Shift;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use JetBrains\PhpStorm\Deprecated;

class StaffController extends Controller
{
    //
    public function list()
    {
        # code...

        $doctor = User::where('role',1)->get();
        return view('doctor.index',compact(['doctor']));
    }
    public function create()
    {
        # code...

        $shift = Shift::get();
        $department = Department::get();
        return view('doctor.create',compact(['shift','department']));
    }

    public function store( storeStaffRequest $request)
    {
        # code...
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            User::create([
                "image" => $path,
                'name'=>$request->name,
                'shift_id'=>$request->shift_id,
                'department_id'=>$request->department_id,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'salary'=>$request->salary,
                'gender'=>$request->gender,
                'age'=>$request->age,
                'role'=>$request->role,
                'national_id'=>$request->national_id,
                'about'=>$request->about,
            ]);
        }
        return redirect('staff');

    }
    public function delete($id)
    {
        # code...
        $staff = USer::where('id',$id)->delete();
        return redirect('staff');
    }
    public function update($id)
    {
        # code...
        $doctor = USer::where('id',$id)->first();
        $doctor->image = asset($doctor->image);
        $department = Department::get();
        $shift = Shift::get();
        return view('doctor.update',compact(['doctor','department','shift']));
    }
    public function edit(EditStaffRequest $request ,$id)
    {
        # code...
        $doctor = USer::where('id' ,$id)->first();
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            $doctor->update([
                "image" => $path,
                'name'=>$request->name,
                'shift_id'=>$request->shift_id,
                'department_id'=>$request->department_id,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'salary'=>$request->salary,
                'gender'=>$request->gender,
                'age'=>$request->age,
                'role'=>$request->role,
                'national_id'=>$request->national_id,
                'about'=>$request->about,

            ]);
        }
        if($image == null){
            $doctor->update([
                'name'=>$request->name,
                'shift_id'=>$request->shift_id,
                'department_id'=>$request->department_id,
                'phone'=>$request->phone,
                'address'=>$request->address,
                'salary'=>$request->salary,
                'gender'=>$request->gender,
                'age'=>$request->age,
                'role'=>$request->role,
                'national_id'=>$request->national_id,
                'about'=>$request->about,
            ]);
        }
        return redirect('staff');
    }

}
