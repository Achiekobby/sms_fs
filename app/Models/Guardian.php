<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Guardian extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = ["id","uuid","student_id","first_name","last_name","email", "phone","password","role","otp_value"];

    protected $casts = ["email_verified_at"=>"datetime","password"=>"hashed"];

    protected $hidden = ["password","remember_token","student_id"];
}
