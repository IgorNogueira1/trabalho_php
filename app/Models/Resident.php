<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    protected $fillable = ["name", "email", "phone", "address"];

    public function ordens()
    {
        return $this->hasMany(Ordem::class);
    }
}
