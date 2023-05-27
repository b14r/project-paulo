<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientSale extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function client() {
        return $this->hasOne(Client::class);
    }

    public function makeSaleClientSale(){
        return $this->belongsToMany(MakeSale::class);
    }


}
