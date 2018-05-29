<?php

Route::group(['middleware' => 'ip'], function () {
    Route::get('/', 'DashboardController@index');
});

Route::post('/webhook/github', 'GitHubWebhookController@gitRepoReceivedPush');

Route::ohDearWebhooks('/oh-dear-webhooks');

Route::any('last-fm',function(){
	\Illuminate\Support\Facades\Artisan::call('dashboard:fetch-current-track');
});
