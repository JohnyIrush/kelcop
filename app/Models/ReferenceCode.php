<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceCode extends Model
{
    use HasFactory;

    public function mainActivities()
    {
        return $this->hasMany(MainActivity::class, 'RefCode', 'RefCode');
    }

    public function referenceCodeUnits()
    {
        return $this->hasMany(ReferenceCodeUnit::class, 'RefCode', 'RefCode');
    }
}
