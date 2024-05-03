<?php

namespace App\Models\Origin;

use App\Models\Transaction\Transactions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description'
    ];

    public function transaction()
    {
        return $this->hasOne(Transactions::class);
    }
}
