<?php

declare(strict_types=1);

namespace Booking\Auth\Providers;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'auth');
        $this->loadRoutesFrom(__DIR__.'/../../routes/auth-routes.php');
    }

    public function boot(): void
    {
        //
    }
}
