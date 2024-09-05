<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    // Define the attributes that are mass assignable
    protected $fillable = [
        'name',
        'email',
        'address',
        'payment_type',
        'total_amount',
    ];
}
