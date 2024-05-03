<?php

namespace App\Models;

use App\Models\Transaction\Transactions;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Types extends Model
{
    use HasFactory;

    protected $table = "types_of_movements";
    protected $fillable = [
        'name',
        'description'
    ];

    public function transaction()
    {
        return $this->hasOne(Transactions::class);
    }
}
