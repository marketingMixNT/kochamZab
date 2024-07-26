<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Social;
use Filament\Forms\Set;
use Filament\Forms\Form;
use App\Models\Apartment;
use Filament\Tables\Table;
use Illuminate\Support\Str;
use Filament\Facades\Filament;
use Illuminate\Support\Carbon;
use Filament\Resources\Resource;
use Awcodes\Shout\Components\Shout;
use Livewire\Component as Livewire;
use Filament\Forms\Components\Toggle;

use Filament\Forms\Components\Section;
use Filament\Forms\Components\Fieldset;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Component;
use Illuminate\Database\Eloquent\Builder;
use Filament\Resources\Concerns\Translatable;
use App\Filament\Resources\ApartmentResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ApartmentResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;

class ApartmentResource extends Resource
{
    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Apartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static ?string $navigationGroup = 'Treści';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // SEO
                Section::make('SEO')
                    ->icon('heroicon-o-globe-alt')
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź meta title oraz meta description , które informują użytkowników o treści strony.')
                    ->schema([
                        Shout::make('info')
                            ->content('Tytuł oraz opis zostaną uzupełnione automatycznie jezeli ich nie podasz. Zachecamy jednak do zrobienia tego w celu lepszej optymalizacji')
                            ->type('info')
                            ->color('success'),

                        TextInput::make('meta_title')
                            ->label('Tytuł Meta')
                            ->placeholder('Meta title to tytuł strony internetowej wyświetlany w wynikach wyszukiwarek i na kartach przeglądarki.')
                            ->characterLimit(60)
                            ->minLength(10)
                            ->maxLength(75)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                $validate = $livewire->validateOnly($component->getStatePath());
                            })
                            ->columnSpanFull(),

                        TextInput::make('meta_desc')
                            ->label('Opis Meta')
                            ->placeholder('Meta description to krótki opis strony internetowej wyświetlany w wynikach wyszukiwarek.')
                            ->characterLimit(160)
                            ->minLength(10)
                            ->maxLength(180)
                            ->live(debounce: 1000)
                            ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                $validate = $livewire->validateOnly($component->getStatePath());
                            })
                            ->columnSpanFull(),
                    ]),

                //INFO
                Section::make('Główne informacje')
                    ->icon('heroicon-o-information-circle')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Podaj nazwę atrakcji, dane kontaktowe oraz social media')
                    ->schema([

                        Forms\Components\TextInput::make('name')
                            ->label('Nazwa Apartamentu')
                            ->unique(ignoreRecord: true)
                            ->minLength(3)
                            ->maxLength(255)
                            ->required()
                            ->live(debounce: 1000)
                            ->afterStateUpdated(fn (Set $set, ?string $state) => $set('slug', Str::slug($state))),

                        Forms\Components\TextInput::make('slug')
                            ->label('Slug')
                            ->required()
                            ->placeholder('Przyjazny adres url który wygeneruje się automatycznie')
                            ->readOnly(),


                        Fieldset::make('Dane kontaktowe')
                            ->schema([

                                Forms\Components\TextInput::make('phone')
                                    ->label('Telefon')
                                    ->prefix('+48')
                                    ->integer()
                                    ->columns(1),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                        $component
                                            ->hintIcon('heroicon-m-check-circle')
                                            ->hintColor('success');
                                    })
                                    ->columns(1),

                                Forms\Components\TextInput::make('site_link')
                                    ->label('Link do strony apartamentu')
                                    ->url()
                                    ->minLength(3)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull(),

                                Repeater::make('socials')
                                    ->label('Social Media')
                                    ->schema(Social::getForm())
                                    ->relationship()
                                    ->columnSpanFull()
                                    ->itemLabel(fn (array $state): ?string => $state['name'] ?? null)
                                    ->addActionLabel('Dodaj social')
                                    ->collapsed()
                                    ->collapsible()
                                    ->grid(2)
                                    ->defaultItems(0)


                            ])



                    ]),

                //CONTENT
                Section::make('Opis')
                    ->icon('heroicon-o-pencil-square')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Wprowadź opis na stronę apartamentu')
                    ->schema([
                        Forms\Components\RichEditor::make('desc')
                            ->label('Główny opis')
                            ->toolbarButtons([
                                'bold', 'italic',  'h2',
                                'h3',
                                'italic', 'bulletList',  'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->required()
                            ->columnSpanFull(),
                    ]),

                //ADDRESS
                Section::make('Adres')
                    ->icon('heroicon-o-map')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Podaj adres apartamentu oraz dodaj mapę google')
                    ->schema([


                        Forms\Components\TextInput::make('address')
                            ->label('Adres')
                            ->required()
                            ->minLength(3)
                            ->maxLength(255)
                            ->placeholder('np. Ludźmierska 26A')
                            ->columns(1),

                        Forms\Components\TextInput::make('google_maps_link')
                            ->label('Link do Google Maps')
                            ->placeholder('np. https://maps.app.goo.gl/6mVWwduHMxm2pEKP8')
                            ->url()
                            ->columns(1),

                        Forms\Components\Textarea::make('google_maps_frame')
                            ->label('Google Maps iFrame')
                            ->placeholder('wklej tutaj iframe z mapą google')
                            ->autosize()
                            ->columnSpanFull(),

                        Shout::make('info')
                            ->content('Usuń tagi: width="", height="" oraz dodaj tagi: name="nazwaAtrakcji", class="w-full h-full"')
                            ->type('info')
                            ->color('danger')
                            ->columnSpanFull(),
                    ]),

                //IMAGES
                Section::make('Zdjęcia')
                    ->icon('heroicon-o-photo')
                    ->columns(2)
                    ->collapsible()
                    ->collapsed()
                    ->description('Dodaj miniaturkę która będzie zdjęciem górnym oraz galerię')
                    ->schema([
                        Forms\Components\FileUpload::make('thumbnail')
                            ->label('Miniaturka')
                            ->directory('apartments-thumbnails')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'apartment-miniaturka' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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
                            ->required()
                            ->columnSpanFull(),
                        Forms\Components\FileUpload::make('gallery')
                            ->label('Galeria')
                            ->directory('apartments-galleries')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'apartment-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->multiple()
                            ->appendFiles()
                            ->image()
                            ->reorderable()
                            // ->hint('Pierwsze 3 zdjęcia pojawią się przy głównym opisie')
                            ->maxSize(8192)
                            ->optimize('webp')
                            ->imageEditor()
                            ->minFiles(3)
                            ->maxFiles(12)
                            ->panelLayout('grid')
                            ->imageEditorAspectRatios([
                                null,
                                '16:9',
                                '4:3',
                                '1:1',
                            ])
                            ->required()

                            ->columnSpanFull(),
                    ]),

                Toggle::make('featured')->label('Polecana')->onIcon('heroicon-o-star'),

                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->default(
                        Filament::auth()->id()
                    )->readOnly()
                    ->hidden()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->reorderable('sort')
            ->defaultSort('sort', 'desc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka'),

                Tables\Columns\TextColumn::make('name')
                    ->label('Nazwa')
                    ->description(function (Apartment $record) {
                        return Str::limit(strip_tags($record->desc), 40);
                    })
                    ->searchable()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('posts_count')
                    ->label('Liczba Postów')
                    ->counts('posts')
                    ->sortable(),

                    Tables\Columns\TextColumn::make('user_id')
                    ->label('Autor')
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        $user = User::find($state);
                        return $user ? $user->name : 'brak';
                    })
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Data publikacji')
                    ->dateTime()
                    ->sortable()
                    ->formatStateUsing(function ($state) {
                        return Carbon::parse($state)->format('d-m-Y');
                    })
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

  

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListApartments::route('/'),
            'create' => Pages\CreateApartment::route('/create'),
            'edit' => Pages\EditApartment::route('/{record}/edit'),
        ];
    }
    public static function getNavigationLabel(): string
    {
        return ('Apartamenty');
    }
    public static function getPluralLabel(): string
    {
        return ('Apartamenty');
    }

    public static function getLabel(): string
    {
        return ('Apartament');
    }
}
