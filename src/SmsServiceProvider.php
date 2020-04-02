<?php


namespace Pondit\Sms;


use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'sms');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
//        $this->mergeConfigFrom(__DIR__.'/config/contact.php', 'contact');
    }

    public function register()
    {
    }

}
