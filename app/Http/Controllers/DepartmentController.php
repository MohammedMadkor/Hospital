<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditDepartmentRequest;
use App\Http\Requests\StoreDepartmentRequest;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    //
   
    public function list()
    {
        $department = Department::orderByDesc('id')->get();
        foreach ($department as $d) {
            $d->image = asset($d->image);
            # code...
        }
        # code...

        return view('department.index',compact(['department']));
    }
    public function create()
    {
        # code...

        return view('department.create');
    }
    public function store(StoreDepartmentRequest $request )
    {
        # code...
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            Department::create([
                "name" => $request->name,
                "image" => $path,

            ]);
            return redirect('department');
        }
    }
    public function delete($id)
    {
        # code...
        $department = Department::where('id' , $id);
        $department->delete();
        return redirect('department');
    }
    public function update($id)
    {
        # code...
        $department = Department::where('id' ,$id)->first();
        $department->image = asset($department->image);
        return view('department.update',compact('department'));
    }
    public function edit(EditDepartmentRequest $request ,$id)
    {
        # code...

        $department = Department::where('id',$id)->first();
        $image = $request->image;
        if($image){
            $filename = $image->getClientOriginalName();
            $image->move(base_path('public/uploads'), $filename);
            $path = 'uploads/' . $filename;
            $department->update([
                'name' => $request->name,
                'image' => $path,
            ]);
            return redirect('department');

        }
        $department->update([
            'name' =>$request->name,
        ]);
        return redirect('department');
    }
}
