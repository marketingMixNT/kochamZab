<?php

namespace App\Providers\Filament;

use Filament\Pages;
use Filament\Panel;
use Filament\Widgets;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Illuminate\Support\Facades\Blade;
use App\Filament\Widgets\StatsOverview;
use Filament\Navigation\NavigationItem;
use Filament\Http\Middleware\Authenticate;

use Filament\Support\Facades\FilamentView;
use Filament\SpatieLaravelTranslatablePlugin;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use App\Filament\Resources\PostResource\Widgets\PostStatsOverview;
use App\Filament\Resources\ApartmentResource\Widgets\ApartmentStatsOverview;
use App\Filament\Resources\AttractionResource\Widgets\AttractionStatsOverview;
use App\Filament\Resources\RestaurantResource\Widgets\RestaurantStatsOverview;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel

            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->passwordReset()
            ->unsavedChangesAlerts()
            ->sidebarCollapsibleOnDesktop()
            ->favicon('/assets/favicon/favicon.ico')
            ->brandLogo('/assets/logo/logo--horizontal.webp')
            ->brandLogoHeight(fn () => auth()->check() ? '40px' : '100px')
            ->colors([
                'primary' => Color::hex('#036eb6'),
                'gray' => Color::Slate
            ])

            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([

                StatsOverview::class,
                PostStatsOverview::class


            ])
            ->navigationItems([
                NavigationItem::make('Strona Główna')
                    ->url('https://kochamzab.pl', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-globe-alt'),
                NavigationItem::make('Edytor zdjęć')
                    ->url('https://www.iloveimg.com/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-scissors'),
                NavigationItem::make('Chat GPT')
                    ->url('https://chatgpt.com/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-cpu-chip'),
                NavigationItem::make('Analityka')
                    ->url('https://analytics.google.com/', shouldOpenInNewTab: true)
                    ->icon('heroicon-o-chart-pie'),

            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ])
            ->plugin(SpatieLaravelTranslatablePlugin::make()->defaultLocales(['pl', 'en']),);
    }
}
