<?php

namespace App\Models\Origin;

use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
