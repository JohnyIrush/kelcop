<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExpenseItem extends Model
{
    use HasFactory;

    public function subActivities()
    {
        return $this->hasMany(SubActivity::class, 'Item', 'Item');
    }

    public function category()
    {
        return $this->hasOne(Category::class, 'Cat', 'Cat');
    }

}
