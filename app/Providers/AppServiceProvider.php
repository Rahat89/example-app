<?php

namespace App\Providers;
use App\Contracts\BookInterface;
use App\Contracts\PostInterface;
use App\Services\BookService;
use App\Services\PostService;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     * @return void
     */
    public function register()
    {
        $this->app->bind(PostInterface::class, PostService::class);
        $this->app->bind(BookInterface::class, BookService::class);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
