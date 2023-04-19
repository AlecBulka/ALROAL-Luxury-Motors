<?php

namespace App\Models;

use App\Models\CarBrand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'carbrand_id'
    ];


    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }
}
