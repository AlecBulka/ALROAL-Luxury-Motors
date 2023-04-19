<?php

namespace App\Models;

use App\Models\Car;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavedCar extends Model
{
    use HasFactory;

    protected $fillable = [
        'cars_id',
        'users_id',
    ];

    public function cars(){
        return $this->hasMany(Car::class);
    }

    public function users(){
        return $this->hasMany(User::class);
    }

}
