<?php

namespace PostReadMore;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class PostReadMoreServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'post-read-more');

        Blade::component('post-read-more::post-read-more', 'post-read-more');
    }

    public function register()
    {
        //
    }
}
