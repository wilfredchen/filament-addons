<?php

namespace FilamentAddons;

use Livewire\Livewire;
use Filament\Facades\Filament;
use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentAddonsServiceProvider extends PluginServiceProvider
{
    protected array $styles = [
        'filament-addons-styles' => __DIR__ . '/../resources/dist/filament-addons.css',
    ];

    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-addons')
            ->hasAssets()
            ->hasViews();
    }

    public function boot()
    {
        parent::boot();
    }
}
