<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ["name", "description", "price", "unit"];
    protected $casts = ["price" => 'float'];

    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
