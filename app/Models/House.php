<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends \Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\House
{
    protected $appends = ['full_address'];


    public function flats()
    {
        return $this->hasMany(Flat::class, 'houseguid', 'houseguid' );
    }
    public function addressObject()
    {
        return $this->belongsTo(AddressObject::class, 'aoguid', 'aoguid');
    }

    public function getFullAddressAttribute()
    {
        $address = $this->addressObject->full_address;
        array_unshift($address, $this->housenum);
        return $address;
    }

}
