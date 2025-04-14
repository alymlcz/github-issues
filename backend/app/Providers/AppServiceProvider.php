<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\IssueService;
use App\Repositories\IssueRepository;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(IssueService::class, function ($app) {
            return new IssueService(new IssueRepository());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
