<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    use HasFactory;

    /** @var bool */
    public $timestamps = false;

    /** @var bool */
    public $incrementing = false;

    /** @var string */
    protected $primaryKey = 'aoid';

    /** @var string */
    protected $keyType = 'string';

    public function cities()
    {
        return $this->hasMany(City::class, 'parentguid', 'aoguid');
    }
}

