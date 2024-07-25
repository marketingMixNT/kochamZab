<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'title',
        'slug',
        'thumbnail',
        'content',
        'published_at',
        'featured',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'title' => 'array',
        'slug' => 'array',
        'content' => 'array',
        'published_at' => 'datetime',
        'featured' => 'boolean',
        'user_id' => 'integer',
    ];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function attractions(): BelongsToMany
    {
        return $this->belongsToMany(Attraction::class);
    }

    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class);
    }

    public function hotels(): BelongsToMany
    {
        return $this->belongsToMany(Hotel::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
