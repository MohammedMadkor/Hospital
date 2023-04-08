<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditPeriodRequest;
use App\Http\Requests\StorePeriodRequest;
use App\Models\Period;
use App\Models\Shift;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    //
    public function list()
    {
        # code...
        $period = Period::get();
        return view('period.index',compact(['period']));
    }
    public function create()
    {
        # code...
        $shift = Shift::get();
        return view('period.create',compact(['shift']));
    }
    public function store( StorePeriodRequest $request)
    {
        # code...
        Period::create([
            'Shift_id'=> $request->Shift_id,
            'period_number'=> $request->period_number,
        ]);
        return redirect('period');

    }
    public function delete($id)
    {
        # code...
        $period = Period::where('id',$id);
        $period->delete();
        return redirect('period');
    }
    public function update($id)
    {
        # code...
        $period = Period::where('id',$id)->first();
        $shift = Shift::get();
        return view('period.update',compact(['period','shift']));
    }
    public function edit(EditPeriodRequest $request ,$id)
    {
        # code...
        $period = Period::where('id',$id)->first();
        $period->update([
            'Shift_id' => $request->Shift_id,
            'period_number' => $request->period_number,

        ]);
        return redirect('period');
    }


}
