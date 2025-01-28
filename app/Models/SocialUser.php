<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialUser extends Model
{
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
    ];

    protected $hidden = [
        'password',
    ];
}
