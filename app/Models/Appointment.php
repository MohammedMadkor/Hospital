<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function User()
    {
        # code...
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function Doctor()
    {
        # code...
        return $this->belongsTo(User::class,'doctor_id','id');
    }
    public function User1()
    {
        # code...
        return $this->belongsTo(User::class,'patient_id','id');
    }

    public function Period()
    {
        # code...
        return $this->belongsTo(Period::class,'period_id','id');
    }

}
