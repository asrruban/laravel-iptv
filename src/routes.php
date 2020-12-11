<?php

#IPTV Routes


Route::group([
	'prefix'=>"channels",
    'middleware' => 'api',
	],
    function(){
        Route::get('list',"Ruban\LaravelIPTV\Controllers\ChannelListController@index");
    });
Route::group([
    'middleware' => 'web',
	],
	function(){
		Route::get('listChannels', 'Ruban\LaravelIPTV\Controllers\showListChannelsController@index')->name('list_channels');
		Route::get('addChannel', 'Ruban\LaravelIPTV\Controllers\addChannelController@index')->name('add_channel');
		Route::post('addChannel', 'Ruban\LaravelIPTV\Controllers\createChannelController@save')->name('create_channel');
		
		Route::get('channel/{id}', 'Ruban\LaravelIPTV\Controllers\showChannelController@index')->name('show_channel');
		Route::post('channel/{id}', 'Ruban\LaravelIPTV\Controllers\updateChannelController@save')->name('update_channel');
		Route::get('delChannel/{id}', 'Ruban\LaravelIPTV\Controllers\deleteChannelController@save')->name('delete_channel');
		
		
		Route::get('listChannelsGroups', 'Ruban\LaravelIPTV\Controllers\showListChannelsGroupsController@index')->name('list_channelsGroups');
		
		Route::get('addChannelGroup', 'Ruban\LaravelIPTV\Controllers\addChannelsGroupController@index')->name('add_channelsGroups');
		Route::post('addChannelGroup', 'Ruban\LaravelIPTV\Controllers\createChannelsGroupController@save')->name('create_channelsGroups');
		
		Route::get('channelGroup/{id}', 'Ruban\LaravelIPTV\Controllers\showChannelsGroupController@index')->name('show_channelsGroups');
		
		Route::post('channelGroup/{id}', 'Ruban\LaravelIPTV\Controllers\updateChannelsGroupController@save')->name('update_channelsGroups');
		Route::get('delChannelGroup/{id}', 'Ruban\LaravelIPTV\Controllers\deleteChannelsGroupController@save')->name('delete_channelsGroups');
		
	});
