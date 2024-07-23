<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;
    protected $fillable = [
        'mediciens_id',
    ];

    public function medicien(){
        return $this->belongsTo(Medicien::class);
    }
}
