<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferenceCodeUnit extends Model
{
    use HasFactory;

    public function referenceCode()
    {
        return $this->hasOne(ReferenceCode::class, 'RefCode', 'RefCode');
    }

}
