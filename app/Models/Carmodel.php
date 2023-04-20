<?php

namespace App\Models;

use App\Models\Carbrand;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carmodel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'carbrand_id'
    ];

    public function carbrand() {
        $this->belongsTo(Carbrand::class);
    }
}
