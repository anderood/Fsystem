<?php

namespace App\Models\Category;

use App\Models\Transaction\Transactions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    public function transaction(): HasOne
    {
        return $this->hasOne(Transactions::class);
    }
}
