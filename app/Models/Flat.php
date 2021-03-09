<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\Room;

class Flat extends Room
{
    use HasFactory;

    protected $appends = ['full_address'];

    public function house()
    {
        return $this->belongsTo(House::class, 'houseguid', 'houseguid');
    }

    public function getFullAddressAttribute()
    {
        return $this->house->full_address;
    }
}
