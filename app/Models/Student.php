<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ["id","uuid","school_id","first_name","last_name","date_of_birth", "gender","class_name"];

    protected $hidden = ["school_id"];
}
