<?php

namespace App\Models\Member;

use App\Models\Address\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'dateOfBirth',
        'email',
        'is_active',
        'address_id',
        'observations'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }

    public function getFullName()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
