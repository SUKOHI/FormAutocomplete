<?php namespace Sukohi\FormAutocomplete;

use Illuminate\Support\ServiceProvider;

class FormAutocompleteServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = true;

	/**
	 * Bootstrap the application events.
	 *
	 * @return void
	 */
	public function boot()
	{
		//
	}

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
        $this->app['form-autocomplete'] = $this->app->share(function($app){

            return new FormAutocomplete;

        });
	}

	/**
	 * Get the services provided by the provider.
	 *
	 * @return array
	 */
	public function provides()
	{
		return ['form-autocomplete'];
	}

}
