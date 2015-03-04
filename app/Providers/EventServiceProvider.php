<?php namespace App\Providers;

use Illuminate\Contracts\Events\Dispatcher as DispatcherContract;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider {

	/**
	 * The event handler mappings for the application.
	 *
	 * @var array
	 */
	protected $listen = [
		// 'event.name' => [
		// 	'EventListener',
		// ],
		'App\Events\MyEvent' => [
			'App\Handlers\Events\EmailMyEvent@handle',
		],
		'App\Events\MyEvent' => [
			'App\Handlers\Events\GoMyEvent@handle',
			'App\Handlers\Events\EmailMyEvent@handle',
		],
		'MyEvent' => [
			'App\Handlers\Events\EmailMyEvent@handle',
		],
	];

	/**
	 * Register any other events for your application.
	 *
	 * @param  \Illuminate\Contracts\Events\Dispatcher  $events
	 * @return void
	 */
	public function boot(DispatcherContract $events)
	{
		parent::boot($events);

		// \Event::listen($listen);
		// \Event::listen('MyEvent', function ()
		// {
		// 	abort(404);
		// });
		//
	}

}
