<?php

namespace App\Models\Address;

use App\Models\Member\Member;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $table = 'addresses';

    protected $fillable = [
        'zip_code',
        'street',
        'state',
        'district',
        'number',
        'city',
        'complement',
    ];

    public function member()
    {
        return $this->hasMany(Member::class);
    }
}
