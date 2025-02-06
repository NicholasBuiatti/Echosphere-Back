<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class SocialUser extends Authenticatable implements MustVerifyEmail
{
    use Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'nickname',
        'birth_date',
        'email',
        'number_phone',
        'password',
        'avatar_url',
        'bio',
        'gender',
        'status',
        'email_verified_at',
        'verification_token',
    ];

    protected $hidden = [
        'password',
        'verification_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}

