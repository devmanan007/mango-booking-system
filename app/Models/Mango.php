<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mango extends Model
{
    protected $fillable = [
        'name',
        'variety',
        'origin',
        'grade',
        'price_per_box',
        'stock_quantity',
        'booking_start_date',
        'booking_end_date',
        'description',
        'status',
    ];

    public function isAvailable()
    {
        return $this->status &&
            $this->stock_quantity > 0 &&
            now()->between($this->booking_start_date, $this->booking_end_date);
    }
}
