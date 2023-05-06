<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    public function Appointment()
    {
        # code...
        return $this->hasMany(Appointment::class,'id','user_id');
    }
    public function prescriptionuser()
    {
        # code...
        return $this->hasMany(prescription::class,'id','user_id');
    }
    public function prescriptiondoctor()
    {
        # code...
        return $this->hasMany(prescription::class,'id','doctor_id');
    }
    public function Appointments()
    {
        # code...
        return $this->hasMany(Appointment::class,'id','doctor_id');
    }

    public function Shift()
    {
        # code...
        return $this->belongsTo(Shift::class,'shift_id','id');
    }
    public function Department()
    {
        # code...
        return $this->belongsTo(Department::class,'department_id','id');
    }

    public function prescription()
    {
        # code...
        return $this->belongsTo(prescription::class,'prescription_id','id');
    }


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'national_id',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
