<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsShoppingCart extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function itemsShoppingCart() {
        return $this->hasMany(ItemsShoppingCart::class);
    }
}
