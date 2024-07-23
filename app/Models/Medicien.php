<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Medicien extends Model
{

    use HasFactory;
    protected $fillable = [
        'Scientific_name',
        'Trade_name',
        'Classification',
        'Manufacturer',
        'Quantity_available',
        'Expiration_date',
        'Price',
        'Photo',
    ];
    public function cart()
    {
        return $this->hasMany(Cart::class);
    }
}
