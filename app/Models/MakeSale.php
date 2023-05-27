<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeSale extends Model
{
    use HasFactory;

    public function productSale(){
        return $this->belongsTo(ProductSale::class, 'product_sale_id');
    }

    public function clientSale(){
        return $this->hasOne(ClientSale::class);
    }

    public function statuses(){
        return $this->belongsTo(Status::class, 'payment_status_id');
    }

    public function paymentType(){
        return $this->belongsTo(Payment::class, 'payment_id');
    }
}
