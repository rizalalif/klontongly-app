<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;
    protected $with = 'category';
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'price',
        'quantity',
        'image'

    ];

    public function category(): BelongsTo
    {

        return $this->belongsTo(Category::class);
    }
}
