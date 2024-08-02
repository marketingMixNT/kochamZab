<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use App\Models\Social;
use Filament\Forms\Set;
use App\Models\Category;
use Filament\Forms\Form;
use App\Models\Attraction;

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
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\AttractionResource\Pages;
use App\Filament\Resources\AttractionResource\RelationManagers;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;
use Schmeits\FilamentCharacterCounter\Forms\Components\TextInput;



class AttractionResource extends Resource
{

    use Translatable;

    public static function getTranslatableLocales(): array
    {
        return ['pl', 'en'];
    }
    protected static ?string $model = Attraction::class;

    protected static ?string $navigationIcon = 'heroicon-o-sparkles';

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

                        Forms\Components\TextInput::make('title')
                            ->label('Nazwa atrakcji')
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
                                    ->required()

                                    ->integer()
                                    ->columns(1),

                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()

                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                        $component
                                            ->hintIcon('heroicon-m-check-circle')
                                            ->hintColor('success');
                                    })
                                    ->columns(1),

                                Forms\Components\TextInput::make('site_link')
                                    ->label('Link do strony atrakcji')
                                    ->url()
                                    ->required()

                                    ->minLength(3)
                                    ->live(debounce: 1000)
                                    ->afterStateUpdated(function (Livewire $livewire, Component $component) {
                                        $validate = $livewire->validateOnly($component->getStatePath());
                                    })
                                    ->columnSpanFull(),

                                Repeater::make('socials')
                                    ->label('Social Media')
                                    ->relationship('socials')
                                    ->schema(Social::getForm())
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
                    ->description('Wprowadź opis na stronę atrakcji')
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
                    ->description('Podaj adres atrakcji oraz dodaj mapę google')
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
                            ->required()

                            ->columns(1),

                        Forms\Components\Textarea::make('google_maps_frame')
                            ->label('Google Maps iFrame')
                            ->placeholder('wklej tutaj iframe z mapą google')
                            ->autosize()
                            ->required()

                            ->columnSpanFull(),

                            Shout::make('so-important')
                            ->content('W celu poprawy SEO dodaj do mapy tag title="" , np. title="marketingMix"')
                            ->color('waring')
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
                            ->directory('attraction-thumbnails')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'atrakcja-miniaturka' . now()->format('Ymd_His') . '.' . $file->getClientOriginalExtension()
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
                            ->directory('atrakcja-galeria')
                            ->getUploadedFileNameForStorageUsing(
                                fn (TemporaryUploadedFile $file): string => 'atrakcja-galeria-' . now()->format('H-i-s') . '-' . str_replace([' ', '.'], '', microtime()) . '.' . $file->getClientOriginalExtension()
                            )
                            ->multiple()
                            ->appendFiles()
                            ->image()
                            ->reorderable()
                            ->hint('Galeria musi mieć co najmniej 5 zdjęć')
                            ->maxSize(16384)
                            ->optimize('webp')
                            ->imageEditor()
                            ->minFiles(5)
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
                        Shout::make('info')
                            ->content('Jeżeli będziesz miał problem z wgraniem zdjęcia, to pomniejsz je oraz zmień format np. na jpg. Zrobisz to za pomocą zakładki Edytor Zdjęć')
                            ->type('info')
                            ->color('success')
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
            ->defaultSort('sort', 'asc')
            ->columns([
                Tables\Columns\TextColumn::make('sort')
                    ->label('#')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('thumbnail')
                    ->label('Miniaturka')
                    ,

                Tables\Columns\TextColumn::make('title')
                    ->label('Nazwa')
                    ->description(function (Attraction $record) {
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
            'index' => Pages\ListAttractions::route('/'),
            'create' => Pages\CreateAttraction::route('/create'),
            'edit' => Pages\EditAttraction::route('/{record}/edit'),
        ];
    }

    public static function getNavigationLabel(): string
    {
        return ('Atrakcje');
    }
    public static function getPluralLabel(): string
    {
        return ('Atrakcje');
    }

    public static function getLabel(): string
    {
        return ('Atrakcje');
    }
}
