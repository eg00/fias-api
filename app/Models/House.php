<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends \Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\House
{

    public function rooms()
    {
        return $this->hasMany(Room::class, 'houseguid', 'houseguid' );
    }

}
