<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    protected $fillable = [];

    public function status() {
        return $this->belongsTo(Status::class);
    }

    public function paymentStatus() {
        return $this->hasOne(MakeSale::class);
    }
}
