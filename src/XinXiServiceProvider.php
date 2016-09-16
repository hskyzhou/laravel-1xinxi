<?php 
	namespace Hsky\XinXi;

	use Illuminate\Support\ServiceProvider;

	class XinXiServiceProvider extends ServiceProvider {

		/**
		 * Indicates if loading of the provider is deferred.
		 *
		 * @var bool
		 */
		protected $defer = false;

	    /**
	     * Bootstrap the application services.
	     *
	     * @return void
	     */
	    public function boot()
	    {
	        $this->publishes([
	            __DIR__.'/config/xinxi.php' => config_path('xinxi.php'),
	        ]);
	        
	    }

		/**
		 * Register the service provider.
		 *
		 * @return void
		 */
		public function register()
		{
			$this->mergeConfigFrom(__DIR__.'/config/xinxi.php', 'xinxi');

	        $this->app->bind('xinxi', function ($app) {
	            return new XinXi($app);
	        });
		}

		/**
		 * Get the services provided by the provider.
		 *
		 * @return array
		 */
		public function provides()
		{
			return [];
		}

	}
