<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // コンポーネントのエイリアス設定
        Blade::component('component.aside', 'aside');
        Blade::component('component.main', 'main');
        Blade::component('component.message', 'message');
        Blade::component('component.letters-area-parts', 'lettersareaparts');
        Blade::component('component.section-title', 'sectiontitle');
        Blade::component('component.common-btn', 'commonbtn');
        Blade::component('component.syouhin-parts', 'syouhincontainer');
    }
}
