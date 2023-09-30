<?php

namespace App\Providers;

use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryInterface;
use App\DesignPatterns\Structural\Adapter\MediaLibraryAdapter;
use App\DesignPatterns\Structural\Adapter\MediaLibrarySelfWritten;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
//        $this->app->bind(MediaLibraryInterface::class, MediaLibrarySelfWritten::class);
        $this->app->bind(MediaLibraryInterface::class, MediaLibraryAdapter::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
