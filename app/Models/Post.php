<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
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

    public function apartments(): BelongsToMany
    {
        return $this->belongsToMany(Apartment::class);
    }

    public function attractions(): BelongsToMany
    {
        return $this->belongsToMany(Attraction::class);
    }

    public function restaurants(): BelongsToMany
    {
        return $this->belongsToMany(Restaurant::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // METHODS
     public function scopePublished($query)
    {
        $query->where('published_at', '<=', Carbon::now());
    }
    public function getThumbnailUrl()
    {
        return  asset('storage/' . $this->thumbnail);
    }
    public function getPublishedDate()
    {
        return  $this->published_at->diffForHumans();
    }
    public function getExcerpt()
    {
        return Str::limit(strip_tags($this->content), 250);
    }


    // TRANSLATABLE
    public $translatable = ['name', 'slug','meta_title','meta_desc','content'];

}
