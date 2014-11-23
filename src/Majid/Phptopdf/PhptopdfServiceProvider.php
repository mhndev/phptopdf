<?php namespace Majid\Phptopdf;

use Illuminate\Support\ServiceProvider;

class PhptopdfServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;


	public function boot()
	{
		$this->package('majid/phptopdf');
	}


	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app['phptopdf'] = $this->app->share(function($app)
		{
		  return new Phptopdf;
		});
		$this->app->booting(function()
		{
		  $loader = \Illuminate\Foundation\AliasLoader::getInstance();
		  $loader->alias('Phptopdf', 'Majid\Phptopdf\Facades\Phptopdf');
		});	
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return array('phptopdf');
	}

}
