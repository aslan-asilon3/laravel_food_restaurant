<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'image',
        'foodName',
        'price',
        'foodRate',
        'foodOrigin',
        'foodDiscount',
        'foodDescription',
    ];

    public function FoodOrigins()
    {
        return $this->hasMany(FoodOrigin::class);
    }
}
