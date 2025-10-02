<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    use HasFactory;

    protected $fillable = [
        'label',
        'payment',
        'divide',
        'receipt',
        'payed',
        'amount',
        'adjusted_amount'
    ];

    public function user() {
        return $this->hasOne(User::class);
    }

}
