<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    public function carts()
    {
        return $this->hasManyThrough(Cart::class, User::class);
    }
}
