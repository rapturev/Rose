<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Tag;

class Post extends Model
{
    /** @use HasFactory<\Database\Factories\PostFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'posted_at',
    ];

    public function user(): BelongsTo
    {
        $this->belongsTo(User::class);
    }

    public function tags(): HasMany
    {
        $this->hasMany(Tag::class);
    }
}
