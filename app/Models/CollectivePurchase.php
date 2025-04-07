<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CollectivePurchase extends Model
{
    use HasFactory;
    protected $fillable = ["description", "purchase_date"];
    protected $casts = ["purchase_date" => "date"];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
