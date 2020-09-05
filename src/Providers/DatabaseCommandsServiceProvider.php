<?php

namespace Balt\Providers;

use Illuminate\Support\ServiceProvider;

class DatabaseCommandsServiceProvider extends ServiceProvider
{

    public function boot()
    {

        if ($this->app->runningInConsole()) {
            $this->commands([
                \DatabaseConfigurationCommand::class
            ]);
        }

    }

}