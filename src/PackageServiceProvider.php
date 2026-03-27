<?php

namespace Dc\PackagePoc;

use Illuminate\Support\ServiceProvider;

class PackageServiceProvider extends ServiceProvider 
{
    public function register(): void 
    {

    }

    public function boot(): void
    {
        dd('hurray!!');
    }
}