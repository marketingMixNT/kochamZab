<?php

namespace App\Models;

use Filament\Facades\Filament;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Model;
use Filament\Forms\Components\Component;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Social extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'link',
        'apartment_id',
        'attraction_id',
        'restaurant_id',
        'user_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'apartment_id' => 'integer',
        'attraction_id' => 'integer',
        'restaurant_id' => 'integer',
        'user_id' => 'integer',
    ];

    public function apartment(): BelongsTo
    {
        return $this->belongsTo(Apartment::class);
    }

    public function attraction(): BelongsTo
    {
        return $this->belongsTo(Attraction::class);
    }

    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(Restaurant::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public static function getForm($context = null): array
    {
        return [
            Select::make('name')
                ->label('Platforma')
                ->required()
                ->disableOptionsWhenSelectedInSiblingRepeaterItems()
                ->live()
                ->searchable()
                ->preload()
                ->options([
                    'facebook' => 'Facebook',
                    'instagram' => 'Instagram',
                    'twitter' => 'X/Twitter',
                    'tiktok' => 'TikTok',
                    'youtube' => 'YouTube',
                    'linkedin' => 'LinkedIn',
                    'tripadvisor' => 'TripAdvisor',
                    'booking' => 'Booking',
                ]),


            TextInput::make('link')
                ->label('Link')
                ->required()
                ->minLength(3)
                ->url()
                
                ->placeholder('np. https://www.instagram.com/marketingmix_pl/'),

               
        ];
    }
}
