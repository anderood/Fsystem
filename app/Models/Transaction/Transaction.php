<?php

namespace App\Models\Transaction;

use App\Models\Type\Type;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'amount',
        'date',
        'member_id',
        'type_id',
        'origin_id',
        'movement_id',
        'observation',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
