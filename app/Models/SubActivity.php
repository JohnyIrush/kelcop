<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubActivity extends Model
{
    use HasFactory;

    public function expenseItem()
    {
        return $this->belongsTo(ExpenseItem::class, 'Item');
    }
}
