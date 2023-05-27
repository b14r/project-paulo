<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function countryState() {
        return $this->hasOne(CountryState::class);
    }

    public function clientSale() {
        return $this->hasMany(ClientSale::class);
    }
}
