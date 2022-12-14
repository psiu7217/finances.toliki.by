<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'cash',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
