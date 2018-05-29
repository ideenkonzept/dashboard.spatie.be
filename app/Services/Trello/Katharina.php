<?php
/**
 * User: Ahmed Dabak
 * Date: 29.05.2018
 * Time: 10:33
 */

namespace App\Services\Trello;


use Trello\Client;

class Katharina extends TrelloApi {

	public function __construct( Client $client ) {
		parent::__construct( $client );
	}

	public function fetchAllTasks() {
		return $this->client->members()->cards()->all('katharinaschluss');
	}
}