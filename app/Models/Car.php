<?php

namespace App\Models;

use App\Models\Carbrand;
use App\Models\Carmodel;
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
        'engine',
        'wheels',
        'tires',
        'driveTrain',
        'gearbox',
        'exterior',
        'interior',
        'kilometers',
        'price',
        'carmodel_id',
        'carbrand_id',
        'year',
    ];

    public function carbrand()
    {
        return $this->belongsTo(Carbrand::class);
    }

    public function carmodel()
    {
        return $this->belongsTo(Carmodel::class);
    }

    public function saveds() {
        return $this->hasMany(Saved::class);
    }
}
