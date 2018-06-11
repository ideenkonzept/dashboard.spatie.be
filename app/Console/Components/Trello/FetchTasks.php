<?php

namespace App\Console\Components\Trello;

use App\Events\Tasks\TasksFetched;
use App\Services\Trello\Ahmed;
use App\Services\Trello\Ali;
use App\Services\Trello\Helen;
use App\Services\Trello\Katharina;
use App\Services\Trello\Kevin;
use App\Services\Trello\Markus;
use App\Services\Trello\Mathaeus;
use App\Services\Trello\Mayar;
use App\Services\Trello\Michelle;
use App\Services\Trello\Sonia;
use Illuminate\Console\Command;

class FetchTasks extends Command {
	protected $signature = 'dashboard:fetch-trello-tasks';

	protected $description = 'Fetch all tasks for a givien user';


	public function handle() {
		$users = [
			Ahmed::class,
			Michelle::class,
			Katharina::class,
			Helen::class,
			Markus::class,
			Sonia::class,
			Ali::class,
			Mathaeus::class,
			Mayar::class,
			Kevin::class
		];

		$tasks = [];

		foreach ( $users as $user ) {
			try {
				$tasks[ strtolower( class_basename( $user ) ) ] = collect( app( $user )->fetchAllTasks() )->pluck( 'name' );
			}catch (\Exception $exception) {
				dd(  'An error occurred while trying to get the tasks from Trello.' );
			}
		}


		event(new TasksFetched($tasks));
	}
}
