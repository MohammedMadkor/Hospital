<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function Shift()
    {
        # code...
        return $this->belongsTo(Shift::class,'Shift_id','id');
    }
     public function Appointment()
     {
         # code...
         return $this->hasMany(Appointment::class,'id','period_id');
     }
}
