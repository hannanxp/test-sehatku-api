<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{

    protected $fillable = [
        'id_no',
        'title',
        'fullname',
        'gender',
        'doctor_specialist_id',
        'experience',
        'education',
        'str_no',
        'place',
        'sip_no',
        'status',
        'phone',
        'email',
        'password',
        'description',
        'photo'
    ];
    
    protected $hidden = [
      'password'
    ];
    
    public function doctorSpecialist()
    {
        return $this->belongsTo('App\DoctorSpecialist');
    }

}
