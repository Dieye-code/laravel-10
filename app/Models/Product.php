<?php

namespace App\Models;

use App\Models\Trait\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'libelle',
        'description',
        "photo",
        'price',
        "quantity",
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
