<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['resident_id', 'product_id', 'collective_purchase_id', 'quantity'];

    public function resident()
    {
        return $this->belongsTo(Resident::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function collectivePurchase()
    {
        return $this->belongsTo(CollectivePurchase::class);
    }

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
}
