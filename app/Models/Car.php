<?php

namespace App\Models;

use App\Models\CarBrand;
use App\Models\CarModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'horsepower',
        'torque',
        'consumption',
        'topSpeed',
        'acceleration',
        'motor',
        'wheels',
        'tires',
        'driveTrain',
        'gearbox',
        'exterior',
        'interior',
        'kilometers',
        'price',
        'models_id',
        'brands_id',
        'year',
    ];

    public function carBrand()
    {
        return $this->belongsTo(CarBrand::class);
    }

    public function carModel()
    {
        return $this->belongsTo(CarModel::class);
    }

}
