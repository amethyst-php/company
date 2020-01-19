<?php

namespace Amethyst\Providers;

use Amethyst\Core\Providers\CommonServiceProvider;

class CompanyServiceProvider extends CommonServiceProvider
{
    /**
     * Register the service provider.
     */
    public function register()
    {
        parent::register();

        $this->app->register(\Amethyst\Providers\LegalEntityServiceProvider::class);
    }
}
