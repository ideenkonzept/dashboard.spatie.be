<?php
/**
 * User: Ahmed Dabak
 * Date: 29.05.2018
 * Time: 10:33
 */

namespace App\Services\Trello;


use Trello\Client;

class Kevin extends TrelloApi {

	public function __construct( Client $client ) {
		parent::__construct( $client );
	}

	public function fetchAllTasks() {
		return $this->client->lists()->cards()->all('5b0e8eee2c5e9ac91d8c380a');
	}
}