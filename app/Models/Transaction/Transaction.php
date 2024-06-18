<?php

namespace App\Models\Transaction;

use App\Models\Member\Member;
use App\Models\Origin\Origin;
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

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function origin()
    {
        return $this->belongsTo(Origin::class);
    }

    public function movement()
    {
//        return $this->belongsTo(Movement::class);
    }
}
