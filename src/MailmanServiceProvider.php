<?php

namespace Sahadat\Mailman;

use Illuminate\Support\ServiceProvider;


class MailmanServiceProvider extends ServiceProvider
{

    public function boot(){

        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views/', 'mailman');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');


    }

    public function register(){


    }
}