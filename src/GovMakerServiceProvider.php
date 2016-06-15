<?php

namespace Government\GovMaker;

use Illuminate\Support\ServiceProvider;

/**
 * This is the service provider.
 *
 * Place the line below in the providers array inside app/config/app.php
 *  Government\GovMaker\src\ViewMakerServiceProvider::class,
 *
 * @package gov-maker
 * @author syafrizal
 *
 **/

class GovMakerServiceProvider extends ServiceProvider
{

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * The console commands.
     *
     * @var bool
     */
    protected $commands = [
        'Government\GovMaker\MakeViews',
    ];


    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands($this->commands);
    }
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['gov-maker'];
    }
}