<?php

namespace App\Models;

use Filament\Forms\Set;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class Category extends Model
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
        'type',
        'thumbnail',
        'user_id',
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

    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


    public static function getForm(): array
    {
        return [
            TextInput::make('name')
                ->label('Nazwa')
                ->unique(ignoreRecord: true)
                ->required()
                ->minLength(3)
                ->maxLength(255)
                ->live(debounce: 1000)
                ->placeholder('np. sporty zimowe')
                ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

            TextInput::make('slug')
                ->label('Slug')
                ->readonly()
                ->required()
                ->minLength(3)
                ->maxLength(255)
                ->placeholder('Przyjazny adres url który wygeneruje się automatycznie'),


            FileUpload::make('thumbnail')
                ->label('Miniaturka')
                ->directory('category-thumbnails')
                ->getUploadedFileNameForStorageUsing(
                    fn (TemporaryUploadedFile $file): string => 'category-thumb' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
                )
                ->image()
                ->maxSize(8192)
                ->optimize('webp')
                ->imageEditor()
                ->imageEditorAspectRatios([
                    null,
                    '16:9',
                    '4:3',
                    '1:1',
                ])
                ->required(),
        ];
    }
}
