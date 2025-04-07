<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;
    protected $fillable = ['order_id', 'status', 'payment_date'];
    protected $casts = ['payment_date' => 'date'];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
