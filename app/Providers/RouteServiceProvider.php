<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;


class RouteServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */

    protected $namespace = "App\Http\Controllers";
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        parent::boot();
        $this->mapRoutes();
    }

    public function mapRoutes(){
        $this->mapWebRoutes();
        $this->mapAdminRoutes();
        $this->mapTestRoutes();
    }
    protected function mapWebRoutes(){
        Route::middleware("web")
        ->namespace($this->namespace)
        ->group(base_path("routes/web.php"));
    }
    protected function mapAdminRoutes(){
        Route::namespace($this->namespace)
        ->group(base_path("routes/admin.php"));
    }
    protected function mapTestRoutes(){
        Route::namespace($this->namespace)
        ->group(base_path("routes/test.php"));
    }
}
