<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = [
        'mediciens_id',
        'quantity',
        'Payment_status',
        'status',
    ];

    public function medicien()
    {
        return $this->belongsToMany(Medicien::class);
    }



}
