<?php namespace Rezakhalafi\Get;

use Illuminate\Support\ServiceProvider;

class GetServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		$this->package('rezakhalafi/get');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		// $this->app['get'] = $this->app->share(function($app){
		// 	return new Get ;
		// });
		$this->app->bind('get', function()
            {
                return new \Rezakhalafi\Get();
            });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array();
	}

}
