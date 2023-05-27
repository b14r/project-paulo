<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisterProduct extends Model
{
    use HasFactory;
    protected $table = 'register_products';

    protected $fillable = [];

    public function category() {
        return $this->hasOne(Category::class);
    }

    public function plataform() {
        return $this->hasOne(Platform::class);
    }

    public function warranty() {
        return $this->hasOne(Warranty::class);
    }

    public function productSales(){
        return $this->hasMany(ProductSale::class);
    }

}
