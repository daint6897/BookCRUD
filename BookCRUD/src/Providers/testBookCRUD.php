<?php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laraviet\BookCRUD\Models\Book;
use Laraviet\BookCRUD\Repositories\BookRepositoryContract;
use Laraviet\BookCRUD\Repositories\BookRepository;
use Laraviet\BookCRUD\Services\BookService;
use Laraviet\BookCRUD\Services\BookServiceContract;
class testBookCRUD extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
         $package_name = "book-crud";

        //routes
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        //view
        $this->loadViewsFrom(__DIR__.'/../resources/views', $package_name);
        $this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/' . $package_name),
            ]);

        //migrations
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        /*
        |--------------------------------------------------------------------------
        | Route Providers need on boot() method, others can be in register() method
        |--------------------------------------------------------------------------
        */
        $this->app->register(RouteServiceProvider::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Laraviet\BookCRUD\Services\BookServiceContract',function($app){
            // $bookRepo = new BookRepository(new Book);
            return new BookService(new BookRepository(new Book));
        });

      
    }
}
