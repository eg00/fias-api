<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends \Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\House
{
    protected $appends = ['full_address', 'full_housenum'];

    protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('order', function (Builder $builder) {
            $builder->orderBy('housenum', 'asc');
        });
    }

    public function flats()
    {
        return $this->hasMany(Flat::class, 'houseguid', 'houseguid');
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

    public function getFullHousenumAttribute()
    {
        $num = $this->housenum;
        if ($this->strucnum) {
            if ( $this->housenum) $num .= ", ";
            $num .= "стр. {$this->strucnum}";
        }
        if ($this->buildnum) $num .= ", к. {$this->buildnum}";
        return $num;
    }

}
