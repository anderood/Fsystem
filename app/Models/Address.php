<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        'zipcode',
        'street',
        'number',
        'complement',
        'district',
        'city',
        'state',
        'user_id'
    ];

    public function User(): BelongsTo
    {
        return $this->belongsTo(Member::class);
    }
}
