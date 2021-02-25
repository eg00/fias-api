<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Liquetsoft\Fias\Laravel\LiquetsoftFiasBundle\Entity\AddressObject as FiasAddressObject;

class AddressObject extends FiasAddressObject
{
    use HasFactory;

    //1 	Регион
    //2 	Автономный округ
    //3 	Район
    //4 	Город
    //5 	Внутригородская территория
    //6 	Населенный пункт
    //7 	Улица
    //8 	Здание, сооружение, объект незавершенного строительства
    //9 	Помещение в пределах здания, сооружения
    //65 	Планировочная структура
    //75 	Земельный участок
    //90 	Дополнительная территория
    //91 	Объект, подчиненный дополнительной территории

    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnlyRegions($query)
    {
        return $query->whereIn('aolevel', [1, 2]);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnlyCities($query)
    {
        return $query->whereIn('aolevel', [4, 6]);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnlyStreets($query)
    {
        return $query->where('aolevel', 7);
    }

    /**
     * @param $query
     * @return mixed
     */
    public function scopeOnlyHouses($query)
    {
        return $query->whereIn('aolevel', [8, 9]);
    }

    public function cities()
    {
        return $this->hasMany(self::class, 'parentguid', 'aoid' )->onlyCities();
    }
}
