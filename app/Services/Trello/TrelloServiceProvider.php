<?php
/**
 * User: Ahmed Dabak
 * Date: 29.05.2018
 * Time: 09:05
 */

namespace App\Services\Trello;

use Illuminate\Support\ServiceProvider;
use Trello\Client;

class TrelloServiceProvider extends ServiceProvider {
	public function register() {

		$this->app->singleton( Ahmed::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '83c05005415ce998752fefebffd0df6f5df318d60028245c81ee9344ec3601c8', Client::AUTH_URL_CLIENT_ID );

			return new Ahmed( $client );
		} );


		$this->app->singleton( Michelle::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '54f3456604a4f5f4c0d7efeab79f85b7e10833d70d0101918255a8fa7f8f2688', Client::AUTH_URL_CLIENT_ID );

			return new Michelle( $client );
		} );

		$this->app->singleton( Katharina::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), 'c030e71f6b2c8f36bd8d91d30011eb3505174588ea1655a0fb6968ebb3c1c155', Client::AUTH_URL_CLIENT_ID );

			return new Katharina( $client );
		} );


		$this->app->singleton( Helen::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '0ce6a0a126edb85c6b7c6f4cea8218267d8b8b817a1921505fd0df9a2fd0b1cf', Client::AUTH_URL_CLIENT_ID );

			return new Helen( $client );
		} );

		$this->app->singleton( Markus::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '93b8b9d54b8a86d5be2e8a2ee4c6dbe192ac434f3443d75d408c47ff75447f53', Client::AUTH_URL_CLIENT_ID );

			return new Markus( $client );
		} );

		$this->app->singleton( Sonia::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '93b8b9d54b8a86d5be2e8a2ee4c6dbe192ac434f3443d75d408c47ff75447f53', Client::AUTH_URL_CLIENT_ID );

			return new Sonia( $client );
		} );

		$this->app->singleton( Ali::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '93b8b9d54b8a86d5be2e8a2ee4c6dbe192ac434f3443d75d408c47ff75447f53', Client::AUTH_URL_CLIENT_ID );

			return new Ali( $client );
		} );

		$this->app->singleton( Matthaeus::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '93b8b9d54b8a86d5be2e8a2ee4c6dbe192ac434f3443d75d408c47ff75447f53', Client::AUTH_URL_CLIENT_ID );

			return new Matthaeus( $client );
		} );

		$this->app->singleton( Mayar::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '93b8b9d54b8a86d5be2e8a2ee4c6dbe192ac434f3443d75d408c47ff75447f53', Client::AUTH_URL_CLIENT_ID );

			return new Mayar( $client );
		} );

		$this->app->singleton( Kevin::class, function () {
			$client = new Client();

			$client->authenticate( config( 'services.trello.api_key' ), '93b8b9d54b8a86d5be2e8a2ee4c6dbe192ac434f3443d75d408c47ff75447f53', Client::AUTH_URL_CLIENT_ID );

			return new Kevin( $client );
		} );
	}
}