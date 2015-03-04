<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;
use Log;

class UserLoggedIn extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		Log::info('UserLoggedIn:__construct');
	}

	public function failed()
	{
	    // Called when the job is failing...
	}

}
