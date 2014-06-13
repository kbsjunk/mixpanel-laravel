<?php namespace Kitbs\Mixpanel;

use Illuminate\Support\ServiceProvider;

class MixpanelServiceProvider extends ServiceProvider {

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
		$this->package('kitbs/mixpanel');
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{		
		$this->app['mixpanel'] = $this->app->share(function($app)
		{
			return new \Kitbs\Mixpanel\MixpanelLaravel;
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
