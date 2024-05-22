<?php

declare(strict_types=1);

namespace StubModuleNamespace\StubClassNamePrefix\Providers;

use Illuminate\Support\ServiceProvider;

class StubClassNamePrefixServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../../config/config.php', 'StubModuleName');
    }

    public function boot(): void
    {
        //
    }
}
