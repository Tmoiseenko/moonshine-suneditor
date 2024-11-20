<?php

declare(strict_types=1);

namespace Tmoiseenko\MoonshineSuneditor\Providers;

use Illuminate\Support\ServiceProvider;

final class SunEditorServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../../resources/views', 'moonshine-suneditor');

        $this->publishes([
            __DIR__ . '/../../public' => public_path('vendor/moonshine-suneditor'),
        ], ['moonshine-suneditor-assets', 'laravel-assets']);
    }
}
