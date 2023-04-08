<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditShiftRequest;
use App\Http\Requests\ShiftRequest;
use App\Models\Shift;
use Illuminate\Http\Request;

class ShiftController extends Controller
{
    //
    public function list()
    {
        # code...
        $shift=Shift::get();
        return view('shift.index',compact(['shift']));
    }
    public function create()
    {
        # code...
        return view('shift.create');
    }
    public function store( ShiftRequest $request)
    {
        # code...
        Shift::create([
            'name' => $request->name,
            'start' => $request->start,
            'end' => $request->end,
        ]);
        return redirect('shift');
    }
    public function delete($id)
    {
        # code...
        $shift= Shift::where('id',$id);
        $shift->delete();
        return redirect('shift');
    }
    public function update($id)
    {
        # code...
        $shift = Shift::where('id',$id)->first();
        return view('shift.update',compact('shift'));

    }
    public function edit(EditShiftRequest $request ,$id)
    {
        # code...
        $shift = Shift::where('id' , $id)->first();
        $shift->update([
            'name' => $request->name,
            'start' => $request->start,
            'end' => $request->end,

        ]);
        return redirect('shift');
    }
}
