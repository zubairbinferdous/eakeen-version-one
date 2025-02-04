<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workPlaceListUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'payment_type',
        'payment_number',
        'transaction_number',
        'packages_amount',
        'status',
        'packages_id'
    ];
}
