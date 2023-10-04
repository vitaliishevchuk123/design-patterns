<?php

namespace App\Providers;

use App\DesignPatterns\Structural\Adapter\Contracts\MediaLibraryInterface;
use App\DesignPatterns\Structural\Adapter\MediaLibraryAdapter;
use App\DesignPatterns\Structural\Adapter\MediaLibrarySelfWritten;
use App\DesignPatterns\Structural\Proxy\ProductRepositoryExample\ProductRepositoryImpl;
use App\DesignPatterns\Structural\Proxy\ProductRepositoryExample\ProductRepositoryInterface;
use App\DesignPatterns\Structural\Proxy\ProductRepositoryExample\ProductRepositoryProxyImpl;
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
//        $this->app->bind(ProductRepositoryInterface::class, ProductRepositoryImpl::class);
        $this->app->bind(ProductRepositoryInterface::class, ProductRepositoryProxyImpl::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
