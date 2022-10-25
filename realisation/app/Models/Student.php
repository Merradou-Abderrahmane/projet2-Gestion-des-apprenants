<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Promotion;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName', 'lastName', 'email', 'promotionId'
    ];

    public function promotion()
    {
        return $this->belongsTo(Promotion::class, 'id', 'promotionId');
    }

}
