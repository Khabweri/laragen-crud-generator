<?php

namespace Laragen\CrudGenerator\Providers;

use Illuminate\Support\ServiceProvider;
use Laragen\CrudGenerator\Console\GenerateCrudCommand;

class CrudGeneratorServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            GenerateCrudCommand::class,
        ]);
    }

    public function register()
    {
        //
    }
}
