<?php

namespace App\Models\Transaction;

use App\Models\Member;
use App\Models\Origin\Origin;
use App\Models\Types;
use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

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


    public function origins()
    {
        return $this->hasOne(Origin::class, 'id', 'origin_id');
    }

    public function types()
    {
        return $this->hasOne(Types::class, 'id', 'type_id');
    }

    public function members()
    {
        return $this->hasOne(Member::class, 'id', 'member_id');
    }
    public function categories(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
