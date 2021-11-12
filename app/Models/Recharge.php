<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recharge extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'username',
        'card_no',
        'amount',
        'status'

    ];
}
