<?php namespace Sukohi\FormAutocomplete;

use Illuminate\Support\ServiceProvider;

class FormAutocompleteServiceProvider extends ServiceProvider {

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
		$this->package('sukohi/form-autocomplete');
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
		return array('form-autocomplete');
	}

}
