<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class medicine extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function prescription()
    {
        # code...
        return $this->belongsTo(prescription::class,'prescription_id','id');
    }

}
