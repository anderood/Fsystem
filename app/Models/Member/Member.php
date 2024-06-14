<?php

namespace App\Models\Member;

use App\Models\Address\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'is_active',
        'address_id',
        'observations'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class, 'address_id', 'id');
    }
}
