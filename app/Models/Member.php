<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Member extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'dateOfBirth',
        'email',
        'email_verified_at',
        'isActive',
        'isMember',
        'observations'
    ];

    public function address(): HasOne
    {
        return $this->hasOne(Address::class);
    }
}