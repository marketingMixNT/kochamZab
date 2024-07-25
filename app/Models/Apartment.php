<?php

namespace App\Models;

use App\Models\Post;
use App\Models\Social;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Apartment extends Model
{
    use HasTranslations;

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'meta_title',
        'meta_desc',
        'name',
        'slug',
        'desc',
        'thumbnail',
        'gallery',
        'address',
        'phone',
        'email',
        'google_maps_link',
        'google_maps_frame',
        'site_link',
        'featured',
        'sort',
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
        'name' => 'array',
        'slug' => 'array',
        'desc' => 'array',
        'gallery' => 'array',
        'featured' => 'boolean',
        'user_id' => 'integer',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function socials(): HasMany
    {
        return $this->hasMany(Social::class);
    }

    public $translatable = ['name', 'slug','meta_title','meta_desc','desc'];

}
