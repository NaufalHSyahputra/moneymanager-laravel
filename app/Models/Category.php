<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_type_id',
        'parent_id'
    ];

    public function categoryType()
    {
        return $this->belongsTo(CategoryType::class);
    }

    public function categoryParent()
    {
        return $this->belongsTo(Category::class, 'parent_id');
    }
}
