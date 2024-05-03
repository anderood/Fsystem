<?php

namespace App\Models\Transaction;

use App\Models\Member;
use App\Models\Origin\Origin;
use App\Models\Types;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transactions extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'amount',
        'date',
        'member_id',
        'origin_id',
        'category_id',
        'type_id'
    ];


    public function origin()
    {
        return $this->hasOne(Origin::class, 'id', 'origin_id');
    }

    public function type()
    {
        return $this->hasOne(Types::class, 'id', 'type_id');
    }

    public function member()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
}
