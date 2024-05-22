<?php

return [
    /*
       |--------------------------------------------------------------------------
       | Modules Namespace
       |--------------------------------------------------------------------------
       |
       | This is the PHP namespace that your modules will be created in. For
       | example, a module called "Helpers" will be placed in \Modules\Helpers
       | by default.
       |
       | It is *highly recommended* that you configure this to your organization
       | name to make extracting modules to their own package easier (should you
       | choose to ever do so).
       |
       | If you set the namespace, you should also set the vendor name to match.
       |
       */

    'modules_namespace' => 'Booking',

    /*
       |--------------------------------------------------------------------------
       | Composer "Vendor" Name
       |--------------------------------------------------------------------------
       |
       | This is the prefix used for your composer.json file. This should be the
       | kebab-case version of your module namespace (if left null, we will
       | generate the kebab-case version for you).
       |
       */

    'modules_vendor' => null,

    /*
       |--------------------------------------------------------------------------
       | Modules Directory
       |--------------------------------------------------------------------------
       |
       | If you want to install modules in a custom directory, you can do so here.
       | Keeping the default `app-modules/` directory is highly recommended,
       | though, as it keeps your modules near the rest of your application code
       | in an alpha-sorted directory listing.
       |
       */

    'modules_directory' => 'app-modules',

    /*
       |--------------------------------------------------------------------------
       | Base Test Case
       |--------------------------------------------------------------------------
       |
       | This is the base TestCase class name that auto-generated Tests should
       | extend. By default it assumes the default \Tests\TestCase exists.
       |
       */

    'tests_base' => 'Tests\TestCase',

    /*
       |--------------------------------------------------------------------------
       | Custom Stubs
       |--------------------------------------------------------------------------
       |
       | If you would like to use your own custom stubs for new modules, you can
       | configure those here. This should be an array where the key is the path
       | relative to the module and the value is the absolute path to the stub
       | stub file. Destination paths and contents support placeholders. See the
       | README.md file for more information.
       |
       | For example:
       |
       | 'stubs' => [
       | 	'src/Providers/StubClassNamePrefixServiceProvider.php' => base_path('stubs/app-modules/ServiceProvider.php'),
       | ],
       */

    'stubs' => [
        'composer.json' => base_path('stubs/modular/composer-stub-latest.json'),
        'config/config.php' => base_path('stubs/modular/config.php'),
        'src/Providers/StubClassNamePrefixServiceProvider.php' => base_path('stubs/modular/ServiceProvider.php'),
        'src/Enums/.gitkeep' => base_path('stubs/modular/.gitkeep'),
        'src/Contracts/.gitkeep' => base_path('stubs/modular/.gitkeep'),
        'src/Traits/.gitkeep' => base_path('stubs/modular/.gitkeep'),
        'src/Exceptions/.gitkeep' => base_path('stubs/modular/.gitkeep'),
        'src/Actions/.gitkeep' => base_path('stubs/modular/.gitkeep'),
        'tests/.gitkeep' => base_path('stubs/modular/.gitkeep'),
        'tests/Feature/StubClassNamePrefixTest.php' => base_path('stubs/modular/ExampleFeatureTest.php'),
        'tests/Unit/StubClassNamePrefixTest.php' => base_path('stubs/modular/ExampleUnitTest.php'),
        'routes/StubModuleName-routes.php' => base_path('stubs/modular/web-routes.php'),
        'resources/lang/ru/messages.php' => base_path('stubs/modular/messages.php'),
        'resources/lang/en/messages.php' => base_path('stubs/modular/messages.php'),
    ],

    /*
       |--------------------------------------------------------------------------
       | Custom override of event discovery
       |--------------------------------------------------------------------------
       |
       | This is a custom override of the event discovery feature. If you want to
       | disable event discovery, set this to false. If you want to enable event
       | discovery, set this to true. We will still check the app namespace for
       | the presence of event discovery.
       */

    'should_discover_events' => null,
];
