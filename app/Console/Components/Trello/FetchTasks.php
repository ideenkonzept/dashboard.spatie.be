<?php

namespace App\Console\Components\Trello;

use App\Events\Tasks\TasksFetched;
use App\Services\Trello\Ahmed;
use App\Services\Trello\Helen;
use App\Services\Trello\Katharina;
use App\Services\Trello\Markus;
use App\Services\Trello\Michelle;
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
			Markus::class
		];

		$tasks = [];

		foreach ( $users as $user ) {
			$tasks[ strtolower(class_basename($user)) ] = collect(app( $user )->fetchAllTasks())->pluck('name');
		}


		event(new TasksFetched($tasks));
	}
}
