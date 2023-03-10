<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'subject',
        'date',
        'phone',
        'age',
        'address',
        'image',
    ];


    /**************************************** to relationship ****************************************/
    public function teacher()
    {
        return $this->hasMany(Section::class,'section_teacher');

//    return $this->hasMany(Teacher::class, 'id');
    }



}
