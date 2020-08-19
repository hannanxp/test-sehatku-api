<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DoctorSpecialist extends Model
{
    protected $fillable = [
        'name',
        'iconUrl',
        'slug'
    ];
}
