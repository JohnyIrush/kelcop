<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainActivity extends Model
{
    use HasFactory;

    public function referenceCode()
    {
        return $this->hasOne(ReferenceCode::class, 'RefCode', 'RefCode');
    }

    public function subActivities()
    {
        return $this->hasMany(SubActivity::class, 'AcNo', 'AcNo');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'Cat', 'Cat');
    }

    public function financing()
    {
        return $this->hasOne(Financing::class, 'Donor', 'Donor');
    }

    public function center()
    {
        return $this->hasOne(Center::class, 'Center', 'Centre');
    }

    public function referenceCodeUnits()
    {
        return $this->hasMany(ReferenceCodeUnit::class, 'RefCode', 'RefCode');
    }
}
