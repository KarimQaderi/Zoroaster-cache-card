<?php

    namespace KarimQaderi\ZoroasterCacheCard;

    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\ServiceProvider;

    class CardServiceProvider extends ServiceProvider
    {
        /**
         * Bootstrap any application services.
         *
         * @return void
         */
        public function boot()
        {

            $this->loadViewsFrom(__DIR__ . '/../resources/view' , 'ZoroasterCacheCard');

            $this->app->booted(function(){
                $this->routes();
            });

        }

        /**
         * Register the card's routes.
         *
         * @return void
         */
        protected function routes()
        {
            if($this->app->routesAreCached()){
                return;
            }

            Route::middleware(['web' , 'can:Zoroaster-cache-card' , 'can:Zoroaster'])
                ->prefix('ZoroasterCacheCard')
                ->group(__DIR__ . '/../routes/web.php');
        }

        /**
         * Register any application services.
         *
         * @return void
         */
        public function register()
        {
            //
        }
    }
