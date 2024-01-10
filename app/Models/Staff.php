<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens;

    protected $fillable = ["id","uuid","school_id","first_name","last_name","email", "phone","password","role","otp_value"];

    protected $casts = ["email_verified_at"=>"datetime","password"=>"hashed"];

    protected $hidden = ["password","remember_token","school_id"];
}

