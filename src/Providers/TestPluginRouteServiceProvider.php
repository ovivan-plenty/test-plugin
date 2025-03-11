<?php

namespace TestPlugin\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;

/**
 * Class TestPluginRouteServiceProvider
 * @package TestPlugin\Providers
 */
class TestPluginRouteServiceProvider extends RouteServiceProvider
{
    /**
     * @param Router $router
     */
    public function map(Router $router)
    {
        $router->get('hello-world','TestPlugin\Controllers\TestPluginController@getHelloWorldPage');
    }
}