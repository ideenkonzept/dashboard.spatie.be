<?php
/**
 * User: Ahmed Dabak
 * Date: 29.05.2018
 * Time: 09:07
 */

namespace App\Services\Trello;


use Trello\Client;

class TrelloApi {

	/**
	 * @var Client
	 */
	protected $client;

	public function __construct( Client $client) {
		$this->client = $client;
	}
}