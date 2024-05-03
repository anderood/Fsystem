<?php

namespace App\Models\Transaction;

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

    public function categories(): HasOne
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}
