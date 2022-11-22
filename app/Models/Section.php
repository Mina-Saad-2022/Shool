<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;

    protected $fillable = [
        'sections',

    ];

public function teacher()
{
    return $this->belongsToMany(Teacher::class,'section_teacher');

//    return $this->hasMany(Teacher::class, 'id');
}

}
