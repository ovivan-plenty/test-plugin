<?php

namespace TestPlugin\Providers;

use Plenty\Plugin\ServiceProvider;

/**
 * Class TestPluginServiceProvider
 * @package TestPlugin\Providers
 */
class TestPluginServiceProvider extends ServiceProvider
{
    /**
    * Register the route service provider
    */
    public function register()
    {
        $this->getApplication()->register(TestPluginRouteServiceProvider::class);
    }
}