<?php

namespace App\Providers;

use App\View\Components\Layouts\Box;
use App\View\Components\Layouts\Form;
use App\View\Components\Layouts\Main;
use App\View\Components\Layouts\Page;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::component('main-layout', Main::class);
        Blade::component('box-layout', Box::class);
        Blade::component('form-layout', Form::class);
        Blade::component('page-layout', Page::class);
    }
}
