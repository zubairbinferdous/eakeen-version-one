<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class workPlace extends Model
{
    use HasFactory;
    protected $fillable = [
        'packages_name',
        'packages_amount',
        'payment_type',
        'number',
        'status',
        'task_one',
        'task_two',
        'task_three',
        'task_four',
        'task_five',
    ];
}
