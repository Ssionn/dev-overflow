<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\View;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Thread extends Model
{
    use HasFactory;

    public function users(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function catergories(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    public function threadTags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    public function threadViews(): HasMany
    {
        return $this->hasMany(View::class);
    }
}
