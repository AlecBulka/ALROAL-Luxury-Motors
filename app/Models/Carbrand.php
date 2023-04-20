<?php

namespace App\Models;

use App\Models\Carmodel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carbrand extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function carmodels() {
        $this->hasMany(Carmodel::class);
    }
}
