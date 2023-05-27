<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory;

    public function registerProduct() {
        return $this->belongsTo(RegisterProduct::class, 'product_id');
    }

    public function makeSaleProductSale(){
        return $this->belongsToMany(MakeSale::class);
    }
}
