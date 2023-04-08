<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shift extends Model
{
    protected $fillable = ['name','start','end'];
    use HasFactory;
    public function Period()
    {
        # code...
        return $this->hasMany(Period::class,'id','Shift_id');
    }
    public function User()
    {
        # code...
        return $this->hasMany(User::class,'id','shift_id');
    }

}
