<?php

namespace App\Models\Member;

use App\Models\Transaction\Transaction;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $table = 'members';
    protected $fillable = [
        'id',
        'first_name',
        'last_name',
        'email',
        'is_active',
        'address_id',
        'observations'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
