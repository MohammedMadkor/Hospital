<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function User()
    {
        # code...
        return $this->hasMany(User::class,'id','patient_id');
    }
    public function Userprescription()
    {
        # code...
        return $this->belongsTo(User::class,'patient_id','id');
    }
    public function Doctorprescription()
    {
        # code...
        return $this->belongsTo(User::class,'doctor_id','id');
    }

    public function Doctor()
    {
        # code...
        return $this->hasMany(User::class,'id','doctor_id');
    }

    public function Medicine()
    {
        # code...
        return $this->hasMany(Medicine::class,'prescription_id','id');
    }

}
