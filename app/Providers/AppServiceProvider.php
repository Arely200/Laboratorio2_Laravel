<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema; // <--- 1. PEGA ESTA LÍNEA AQUÍ ABAJO DE LA OTRA

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191); // <--- 2. PEGA ESTA LÍNEA AQUÍ DENTRO DE BOOT
    }
}