<?php
namespace Gbcsoft\Contact;

/**
 * Created by PhpStorm.
 * User: Angel De La Cruz
 * Date: 28/11/2018
 * Time: 10:19
 */

use Illuminate\Support\ServiceProvider;

class ContactServiceProvider extends  ServiceProvider
{

    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views','contact');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');

        $this->mergeConfigFrom(
            __DIR__.'/config/contact.php', 'contact'
        );

        $this->publishes([
            __DIR__.'/config/contact.php' => config_path('contact.php'),
            __DIR__.'/views' => resource_path('views/vendor/contact'),
        ]);
    }

    public function register(){}

}