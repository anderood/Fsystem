<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    use HasFactory;

    protected $table = "address";
    protected $fillable = [
        'zipcode',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'member_id'
    ];

    public function Member(): HasOne
    {
        return $this->hasOne("Member", "id");
    }
}
