<?php

namespace App\Models\Origin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];
}
