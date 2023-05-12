<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'orderNumber',
        'status',
        'totalCost',
        'finance',
        'monthsFinanced',
        'downPayment',
        'monthlyCost',
        'car_id',
        'user_id'
    ];

    public function getRouteKeyName() {
        return 'orderNumber';
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
