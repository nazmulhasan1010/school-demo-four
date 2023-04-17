<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

    protected $table = 'sm_staffs';

    /**
     * @return HasMany
     */
    function department(): HasMany
    {
        return $this->hasMany(Depertment::class, 'id','department_id');
    }

    /**
     * @return HasMany
     */
    function designation(): HasMany
    {
        return $this->hasMany(Designation::class, 'id','designation_id');
    }
}
