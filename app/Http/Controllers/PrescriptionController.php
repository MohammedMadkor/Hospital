<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrescriptionRequest;
use App\Models\medicine;
use App\Models\prescription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrescriptionController extends Controller
{
    //
    public function listprescription()
    {
        # code...
        $doctor = Auth::user();

        $prescription = prescription::with('Medicine')->where('doctor_id', $doctor->id)->get();

        return view('prescription.listPrescription',compact('prescription'));
    }
    public function createPrescription($id)
    {
        # code...
        $patient = User::where('id',$id)->first();
        $doctor = Auth::user();
        return view('prescription.createPrescription',compact(['patient','doctor']));
    }
    public function storePrescription(PrescriptionRequest $request)
    {

        $name = $request->name;
        $potion = $request->potion;
        $note = $request->note;
        $today = Carbon::now()->format('Y-m-d');
        try {
            DB::beginTransaction();
            $prescription = prescription::create([
                'patient_id' => $request->patient_id,
                'doctor_id' => $request->doctor_id,
                'diagnosis' => $request->diagnosis,
                'rays' => $request->rays,
                'analysis' => $request->analysis,
                'date' => $today,
            ]);
            if($prescription) {
                for ($i=0; $i < count($name); $i++) {
                    $medicine = medicine::create([
                        'name' => $name[$i],
                        'potion' => $potion[$i],
                        'note' => $note[$i],
                        'prescription_id' => $prescription->id

                    ]);

                }
            }
            DB::commit();
            return redirect(url('DoctorAdmin/appointment'));

        } catch (\Throwable $th) {
            DB::rollback();

            return false;

        }
    }
}
