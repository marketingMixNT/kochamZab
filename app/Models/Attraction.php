<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attraction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'meta_title',
        'meta_desc',
        'google_maps_link',
        'google_maps_frame',
        'desc',
        'thumbnail',
        'gallery',
        'address',
        'site_link',
        'phone',
        'email',
        'featured',
        'order',
        'type',
        'user_id',
        'city_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'array',
        'slug' => 'array',
        'meta_title' => 'array',
        'meta_desc' => 'array',
        'desc' => 'array',
        'featured' => 'boolean',
        'user_id' => 'integer',
        'city_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function city(): BelongsTo
    {
        return $this->belongsTo(City::class);
    }

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }
}
