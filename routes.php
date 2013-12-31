<?php

//首页
Route::get('/',function(){
	// $lang=Input::get('lang');

	// Config::set('users', 'jingdor111');
	// var_dump(Config::get('view.paths'));
	// $fooBar = App::make('FooBar');
	App::setLocale('zh');
	return Response::view('index.home');

	
	// $event = Event::fire('test', array('test'));
	// var_dump($event);
});
// 用户
Route::controller('users', 'UserController');