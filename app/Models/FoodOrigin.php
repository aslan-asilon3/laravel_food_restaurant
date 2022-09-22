<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodOrigin extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'foodId',
        'foodOrigin',
        'foodImageCountry',
    ];


    public function Food()
    {
        return $this->belongsTo(Food::class);
    }
}
