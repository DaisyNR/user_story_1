<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'user_id'
    ];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->BelongsTo(Category::class);
    }
}
