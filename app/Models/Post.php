<?php

/**
 * Author: Mohamed Fadl <Mohamed.Fadl2852@gmail.com>
 * Date: 10/3/2021
 * Time: 4:53 PM
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{

    use HasFactory;

    protected $guarded = [];
    protected $with = ['category', 'author'];

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function scopeFilter($query, array $filters): void
    {
        $query->when(
            $filters['search'] ?? false,
            fn($query, $search) => $query->where(
                fn($query) => $query->whereRaw(
                    'MATCH(title, body) AGAINST(? IN BOOLEAN MODE)',
                    $search
                )
            )
        );

        $query->when(
            $filters['category'] ?? false,
            fn($query, $category) => $query->whereHas(
                'category',
                fn($query) => $query->where('slug', $category)
            )
        );

        $query->when(
            $filters['author'] ?? false,
            fn($query, $author) => $query->whereHas(
                'author',
                fn($query) => $query->where('username', $author)
            )
        );
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class)->latest();
    }
}
